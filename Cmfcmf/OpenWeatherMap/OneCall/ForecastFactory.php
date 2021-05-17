<?php

/*
 * OpenWeatherMap-PHP-API — A PHP API to parse weather data from https://OpenWeatherMap.org.
 *
 * @license MIT
 *
 * Please see the LICENSE file distributed with this source code for further
 * information regarding copyright and licensing.
 *
 * Please visit the following links to read about the usage policies and the license of
 * OpenWeatherMap data before using this library:
 *
 * @see https://OpenWeatherMap.org/price
 * @see https://OpenWeatherMap.org/terms
 * @see https://OpenWeatherMap.org/appid
 */

namespace Cmfcmf\OpenWeatherMap\OneCall;

use Cmfcmf\OpenWeatherMap\OneCall\Forecast\Daily;
use Cmfcmf\OpenWeatherMap\OneCall\Forecast\Hourly;
use Cmfcmf\OpenWeatherMap\OneCall\Forecast\Minutely;
use Cmfcmf\OpenWeatherMap\Util\Alert;
use Cmfcmf\OpenWeatherMap\Util\DateIterator;
use Cmfcmf\OpenWeatherMap\Util\ForecastFeelsLike;
use Cmfcmf\OpenWeatherMap\Util\ForecastTemperature;
use Cmfcmf\OpenWeatherMap\Util\Unit\Clouds;
use Cmfcmf\OpenWeatherMap\Util\Unit\Coordinate;
use Cmfcmf\OpenWeatherMap\Util\Unit\Humidity;
use Cmfcmf\OpenWeatherMap\Util\Unit\MoonPhase;
use Cmfcmf\OpenWeatherMap\Util\Unit\Pop;
use Cmfcmf\OpenWeatherMap\Util\Unit\Precipitation;
use Cmfcmf\OpenWeatherMap\Util\Unit\Pressure;
use Cmfcmf\OpenWeatherMap\Util\Unit\Rain;
use Cmfcmf\OpenWeatherMap\Util\Unit\Snow;
use Cmfcmf\OpenWeatherMap\Util\Unit\Temperature;
use Cmfcmf\OpenWeatherMap\Util\Unit\Uvi;
use Cmfcmf\OpenWeatherMap\Util\Unit\WindDeg;
use Cmfcmf\OpenWeatherMap\Util\Unit\WindSpeed;
use Cmfcmf\OpenWeatherMap\Util\Weather;
use Cmfcmf\OpenWeatherMap\Util\WeatherIterator;
use Cmfcmf\OpenWeatherMap\Util\Wind;
use stdClass;
use DateTimeZone;

/**
 * One call weather class used to hold the forecast weather data.
 */
class ForecastFactory extends AbstractFactory
{

    public function factory(stdClass $data, $units)
    {
        $tz = new DateTimeZone($data->timezone);

        $current = $this->createCurrent($data->current, $units, $tz);

        $minutely = new DateIterator(array_map(function ($minutelyData) use ($tz) {
            return $this->createMinutely($minutelyData, $tz);
        }, $data->minutely), $tz);

        $hourly = new DateIterator(array_map(function ($hourlyData) use ($units, $tz) {
            return $this->createHourly($hourlyData, $units, $tz);
        }, $data->hourly), $tz);

        $daily = new DateIterator(array_map(function ($dailyData) use ($units, $tz) {
            return $this->createDaily($dailyData, $units, $tz);
        }, $data->daily), $tz);

        $alerts = [];
        foreach ($data->alerts ?? [] as $alertsData) {
            $alerts[] = $this->createAlert($alertsData, $tz);
        }

        $values = [
            'lat' => Coordinate::factory($data->lat),
            'lon' => Coordinate::factory($data->lon),
            'timeZone' => $tz,
            'timeZoneOffset' => $data->timezone_offset,
            'current' => $current,
            'minutely' => $minutely,
            'hourly' => $hourly,
            'daily' => $daily,
            'alerts' => $alerts,
        ];

        return new Forecast($values);
    }

    /**
     *
     * @param stdClass $data
     * @param string $units
     * @param DateTimeZone $tz
     * @return void
     */
    public function createMinutely(stdClass $data, DateTimeZone $tz)
    {
        return new Minutely([
            'date' => $this->createDateFromTimestamp($data->dt, $tz),
            'precipitation' => Precipitation::factory($data->precipitation),
        ]);
    }

    /**
     *
     * @param stdClass $data
     * @param string $units
     * @param DateTimeZone $tz
     * @return void
     */
    public function createHourly(stdClass $data, string $units, DateTimeZone $tz)
    {
        $values = $this->createSharedValues($data, $units, $tz);

        $values['pop'] = Pop::factory($data->pop);

        return new Hourly($values);
    }

    /**
     *
     * @param stdClass $data
     * @param string $units
     * @param DateTimeZone $tz
     * @return void
     */
    public function createDaily(stdClass $data, string $units, DateTimeZone $tz)
    {
        $values = [
            'date' => $this->createDateFromTimestamp($data->dt, $tz),
            'sunrise' => $this->createDateFromTimestamp($data->sunrise, $tz),
            'sunset' => $this->createDateFromTimestamp($data->sunset, $tz),
            'moonrise' => $this->createDateFromTimestamp($data->moonrise, $tz),
            'moonset' => $this->createDateFromTimestamp($data->moonset, $tz),
            'moonPhase' => MoonPhase::factory($data->moon_phase),
            'temp' => new ForecastTemperature([
                'morn' => Temperature::factory($data->temp->morn, $units),
                'day' => Temperature::factory($data->temp->day, $units),
                'eve' => Temperature::factory($data->temp->eve, $units),
                'night' => Temperature::factory($data->temp->night, $units),
                'min' => Temperature::factory($data->temp->min, $units),
                'max' => Temperature::factory($data->temp->max, $units),
            ]),
            'feelsLike' => new ForecastFeelsLike([
                'morn' => Temperature::factory($data->feels_like->morn, $units),
                'day' => Temperature::factory($data->feels_like->day, $units),
                'eve' => Temperature::factory($data->feels_like->eve, $units),
                'night' => Temperature::factory($data->feels_like->night, $units),
            ]),
            'pressure' =>  Pressure::factory($data->pressure),
            'humidity' => Humidity::factory($data->humidity),
            'dewPoint' => Temperature::factory($data->dew_point, $units),
            'wind' => new Wind(
                WindSpeed::factory($data->wind_speed, $units),
                $this->isEmpty($data->wind_deg ?? null) ? WindDeg::factory($data->wind_deg) : null,
                $this->isEmpty($data->wind_gust ?? null) ?  WindSpeed::factory($data->wind_gust, $units) : null
            ),
            'clouds' => Clouds::factory($data->clouds),
            'uvi' => Uvi::factory($data->uvi),
            'pop' => Pop::factory($data->pop),
            'weather' => new WeatherIterator(array_map(function ($weatherData) {
                return new Weather($weatherData->id, $weatherData->description, $weatherData->icon);
            }, $data->weather)),
        ];

        if ($this->isEmpty($data->rain ?? null)) {
            $values['rain'] = Rain::factory($data->rain);
        }

        if ($this->isEmpty($data->snow ?? null)) {
            $values['snow'] = Snow::factory($data->snow);
        }

        return new Daily($values);
    }


    public function createAlert(stdClass $data, DateTimeZone $tz)
    {
        return new Alert([
            'senderName' => $data->sender_name,
            'event' => $data->event,
            'start' => $this->createDateFromTimestamp($data->start, $tz),
            'end' => $this->createDateFromTimestamp($data->end, $tz),
            'description' => $data->description,
        ]);
    }
}
