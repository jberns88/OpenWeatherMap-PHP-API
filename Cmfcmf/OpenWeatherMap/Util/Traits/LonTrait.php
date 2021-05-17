<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait LonTrait
{

    public $lon;

    /**
     *
     * @param Unit $lon
     * @return void
     */
    protected function setLon(Unit $lon)
    {
        $this->lon = $lon;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getLon(): Unit
    {
        return $this->lon;
    }
}
