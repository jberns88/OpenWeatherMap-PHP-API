<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait UviTrait
{

    public $uvi;

    /**
     *
     * @param Unit $uvi
     * @return void
     */
    protected function setUvi(Unit $uvi)
    {
        $this->uvi = $uvi;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getUvi(): Unit
    {
        return $this->uvi;
    }
}
