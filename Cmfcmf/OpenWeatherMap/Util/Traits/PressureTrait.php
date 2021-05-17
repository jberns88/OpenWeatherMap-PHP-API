<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait PressureTrait
{

    public $pressure;

    /**
     *
     * @param Unit $pressure
     * @return void
     */
    protected function setPressure(Unit $pressure)
    {
        $this->pressure = $pressure;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getPressure(): Unit
    {
        return $this->pressure;
    }
}
