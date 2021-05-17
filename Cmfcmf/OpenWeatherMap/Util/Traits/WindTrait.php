<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Wind;

trait WindTrait
{

    public $wind;

    /**
     *
     * @param Wind $wind
     * @return void
     */
    protected function setWind(Wind $wind)
    {
        $this->wind = $wind;
        return $this;
    }

    /**
     *
     * @return Wind
     */
    public function getWind(): Wind
    {
        return $this->wind;
    }
}
