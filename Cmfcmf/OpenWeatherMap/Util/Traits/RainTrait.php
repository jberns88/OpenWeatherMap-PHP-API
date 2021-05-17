<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait RainTrait
{

    public $rain;

    /**
     *
     * @param Unit $rain
     * @return void
     */
    protected function setRain(Unit $rain)
    {
        $this->rain = $rain;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getRain(): Unit
    {
        return $this->rain;
    }
}
