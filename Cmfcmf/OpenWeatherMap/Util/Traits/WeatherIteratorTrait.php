<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\WeatherIterator;

trait WeatherIteratorTrait
{

    public $weather;

    /**
     *
     * @param WeatherIterator $weather
     * @return void
     */
    protected function setWeather(WeatherIterator $weather)
    {
        $this->weather = $weather;
        return $this;
    }

    /**
     *
     * @return WeatherIterator
     */
    public function getWeather(): WeatherIterator
    {
        return $this->weather;
    }
}
