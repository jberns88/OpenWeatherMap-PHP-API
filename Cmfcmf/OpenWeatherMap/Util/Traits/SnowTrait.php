<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait SnowTrait
{

    public $snow;

    /**
     *
     * @param Unit $snow
     * @return void
     */
    protected function setSnow(Unit $snow)
    {
        $this->snow = $snow;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getSnow(): Unit
    {
        return $this->snow;
    }
}
