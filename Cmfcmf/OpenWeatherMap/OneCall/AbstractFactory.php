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

use Cmfcmf\OpenWeatherMap\OneCall\Current;
use Cmfcmf\OpenWeatherMap\Util\Rainfall;
use Cmfcmf\OpenWeatherMap\Util\Snowfall;
use Cmfcmf\OpenWeatherMap\Util\Unit;
use Cmfcmf\OpenWeatherMap\Util\Unit\Clouds;
use Cmfcmf\OpenWeatherMap\Util\Unit\Humidity;
use Cmfcmf\OpenWeatherMap\Util\Unit\Pressure;
use Cmfcmf\OpenWeatherMap\Util\Unit\Rain;
use Cmfcmf\OpenWeatherMap\Util\Unit\Snow;
use Cmfcmf\OpenWeatherMap\Util\Unit\Temperature;
use Cmfcmf\OpenWeatherMap\Util\Unit\Visibility;
use Cmfcmf\OpenWeatherMap\Util\Unit\WindDeg;
use Cmfcmf\OpenWeatherMap\Util\Unit\WindSpeed;
use Cmfcmf\OpenWeatherMap\Util\Weather;
use Cmfcmf\OpenWeatherMap\Util\WeatherIterator;
use Cmfcmf\OpenWeatherMap\Util\Wind;
use stdClass;
use DateTimeZone;
use DateTime;


abstract class AbstractFactory
{

    /**
     *
     * @param stdClass $data
     * @param string $units
     * @return void
     */
    protected function createCurrent(stdClass $data, string $units, DateTimeZone $tz)
    {
        $values = $this->createSharedValues($data, $units, $tz);

        $values['sunrise'] = $this->createDateFromTimestamp($data->sunrise, $tz);
        $values['sunset'] = $this->createDateFromTimestamp($data->sunset, $tz);

        if ($this->isEmpty($data->uvi ?? null)) {
            $values['uvi'] = new Unit($data->uvi, 'uvi');
        }

        return new Current($values);
    }

    /**
     *
     * @param stdClass $data
     * @param string $units
     * @param DateTimeZone $tz
     * @return array
     */
    protected function createSharedValues(stdClass $data, string $units, DateTimeZone $tz): array
    {
        $values = [
            'date' => $this->createDateFromTimestamp($data->dt, $tz),
            'temp' =>  Temperature::factory($data->temp, $units),
            'feelsLike' => Temperature::factory($data->feels_like, $units),
            'pressure' =>  Pressure::factory($data->pressure),
            'humidity' => Humidity::factory($data->humidity),
            'dewPoint' => Temperature::factory($data->dew_point, $units),
            'clouds' => Clouds::factory($data->clouds),
            'visibility' => Visibility::factory($data->visibility),
            'wind' => new Wind(
                WindSpeed::factory($data->wind_speed, $units),
                $this->isEmpty($data->wind_deg ?? null) ? WindDeg::factory($data->wind_deg) : null,
                $this->isEmpty($data->wind_gust ?? null) ?  WindSpeed::factory($data->wind_gust, $units) : null
            ),
            'weather' => new WeatherIterator(array_map(function ($weatherData) {
                return new Weather($weatherData->id, $weatherData->description, $weatherData->icon);
            }, $data->weather)),
        ];

        if ($this->isEmpty($data->rain ?? null)) {
            $values['rainfall'] = new Rainfall([
                'oneHour' => Rain::factory($data->rain->{'1h'}),
            ]);
        }

        if ($this->isEmpty($data->snow ?? null)) {
            $values['snowfall'] = new Snowfall([
                'oneHour' => Snow::factory($data->snow->{'1h'}),
            ]);
        }

        return $values;
    }


    /**
     *
     * @param mixed $value
     * @return boolean
     */
    protected function isEmpty($value)
    {
        return ($value === '0' || !empty($value));
    }

    /**
     *
     * @param integer $timestamp
     * @param DateTimeZone $tz
     * @return void
     */
    protected function createDateFromTimestamp(int $timestamp, DateTimeZone $tz)
    {
        $dt = new DateTime();
        $dt->setTimezone($tz);
        $dt->setTimestamp($timestamp);

        return $dt;
    }
}
