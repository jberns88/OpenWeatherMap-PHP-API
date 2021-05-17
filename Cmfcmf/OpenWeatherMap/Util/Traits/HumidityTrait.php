<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait HumidityTrait
{

    public $humidity;

    /**
     *
     * @param Unit $humidity
     * @return void
     */
    protected function setHumidity(Unit $humidity)
    {
        $this->humidity = $humidity;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getHumidity(): Unit
    {
        return $this->humidity;
    }
}
