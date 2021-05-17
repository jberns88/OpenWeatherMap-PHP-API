<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Rainfall;

trait RainfallTrait
{

    public $rainfall;

    /**
     *
     * @param Rainfall $rainfall
     * @return void
     */
    protected function setRainfall(Rainfall $rainfall)
    {
        $this->rainfall = $rainfall;
        return $this;
    }

    /**
     *
     * @return Rainfall
     */
    public function getRainfall(): Rainfall
    {
        return $this->rainfall;
    }
}
