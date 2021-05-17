<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait CloudsTrait
{

    public $clouds;

    /**
     *
     * @param Unit $clouds
     * @return void
     */
    protected function setClouds(Unit $clouds)
    {
        $this->clouds = $clouds;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getClouds(): Unit
    {
        return $this->clouds;
    }
}
