<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Snowfall;

trait SnowfallTrait
{

    public $snowfall;

    /**
     *
     * @param Snowfall $snowfall
     * @return void
     */
    protected function setSnowfall(Snowfall $snowfall)
    {
        $this->snowfall = $snowfall;
        return $this;
    }

    /**
     *
     * @return Snowfall
     */
    public function getSnowfall(): Snowfall
    {
        return $this->snowfall;
    }
}
