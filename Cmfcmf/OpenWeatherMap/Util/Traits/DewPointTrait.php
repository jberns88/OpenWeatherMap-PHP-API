<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait DewPointTrait
{

    public $dew_point;

    /**
     *
     * @param Unit $dew_point
     * @return void
     */
    protected function setDewPoint(Unit $dew_point)
    {
        $this->dew_point = $dew_point;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getDewPoint(): Unit
    {
        return $this->dew_point;
    }
}
