<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait LatTrait
{

    public $lat;

    /**
     *
     * @param Unit $lat
     * @return void
     */
    protected function setLat(Unit $lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getLat(): Unit
    {
        return $this->lat;
    }
}
