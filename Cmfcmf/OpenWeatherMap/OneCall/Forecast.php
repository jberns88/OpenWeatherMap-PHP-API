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
use Cmfcmf\OpenWeatherMap\OneCall\Forecast\Daily;
use Cmfcmf\OpenWeatherMap\OneCall\Forecast\Minutely;
use Cmfcmf\OpenWeatherMap\OneCall\Forecast\Hourly;
use Cmfcmf\OpenWeatherMap\Util\AbstractContainer;
use Cmfcmf\OpenWeatherMap\Util\Alert;
use Cmfcmf\OpenWeatherMap\Util\DateIterator;
use Cmfcmf\OpenWeatherMap\Util\Traits\LatTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\LonTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\TimeZoneOffsetTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\TimeZoneTrait;

/**
 * One call weather class used to hold the historical weather data.
 */
class Forecast extends AbstractContainer
{

    use LatTrait;
    use LonTrait;
    use TimeZoneTrait;
    use TimeZoneOffsetTrait;

    public $current;
    public $hourly = [];
    public $minutely = [];
    public $daily = [];
    public $alerts = [];

    /**
     *
     * @param Current $current
     * @return void
     */
    public function setCurrent(Current $current)
    {
        $this->current = $current;
    }

    /**
     *
     * @param array $hourly
     * @return void
     */
    public function setHourly(DateIterator $hourly)
    {
        $this->hourly = $hourly;
        return $this;
    }

    /**
     *
     * @param array $minutely
     * @return void
     */
    public function setMinutely(DateIterator $minutely)
    {
        $this->minutely = $minutely;
    }

    /**
     *
     * @param array $daily
     * @return void
     */
    public function setDaily(DateIterator $daily)
    {
        $this->daily = $daily;
    }

    /**
     *
     * @param array $daily
     * @return void
     */
    public function setAlerts(array $alerts)
    {
        array_map([$this, 'addAlert'], $alerts);
    }

    /**
     *
     * @param Alert $daily
     * @return void
     */
    protected function addAlert(Alert $alert)
    {
        $this->alerts[] = $alert;
    }
}
