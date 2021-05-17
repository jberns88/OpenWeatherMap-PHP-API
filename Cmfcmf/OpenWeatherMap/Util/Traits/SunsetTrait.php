<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use DateTime;

trait SunsetTrait
{

    public $sunset;

    /*
     * @param DateTime $sunset
     * @return void
     */
    protected function setSunset(DateTime $sunset)
    {
        $this->sunset = $sunset;
        return $this;
    }

    /**
     *
     * @return DateTime
     */
    public function getSunset(): DateTime
    {
        return $this->sunset;
    }
}
