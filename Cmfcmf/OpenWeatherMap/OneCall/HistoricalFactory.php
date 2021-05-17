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

use Cmfcmf\OpenWeatherMap\OneCall\Historical\Hourly;
use Cmfcmf\OpenWeatherMap\Util\DateIterator;
use Cmfcmf\OpenWeatherMap\Util\Unit\Coordinate;
use stdClass;
use DateTimeZone;

/**
 * One call weather class used to hold the historical weather data.
 */
class HistoricalFactory extends AbstractFactory
{

    public function factory(stdClass $data, $units)
    {
        $tz = new DateTimeZone($data->timezone);

        $current = $this->createCurrent($data->current, $units, $tz);

        $hourly = new DateIterator(array_map(function ($hourlyData) use ($units, $tz) {
            return $this->createHourly($hourlyData, $units, $tz);
        }, $data->hourly), $tz);

        $values = [
            'lat' => Coordinate::factory($data->lat),
            'lon' => Coordinate::factory($data->lon),
            'timeZone' => $tz,
            'timeZoneOffset' => $data->timezone_offset,
            'current' => $current,
            'hourly' => $hourly,
        ];

        return new Historical($values);
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
        return new Hourly($values);
    }
}
