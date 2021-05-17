<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait PrecipitationTrait
{

    public $precipitation;

    /**
     *
     * @param Unit $precipitation
     * @return void
     */
    protected function setPrecipitation(Unit $precipitation)
    {
        $this->precipitation = $precipitation;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getPrecipitation(): Unit
    {
        return $this->precipitation;
    }
}
