<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait MoonPhaseTrait
{

    public $moon_phase;

    /*
     * @param Unit $moonPhase
     * @return void
     */
    protected function setMoonPhase(Unit $moonPhase)
    {
        $this->moon_phase = $moonPhase;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getMoonPhase(): Unit
    {
        return $this->moon_phase;
    }
}
