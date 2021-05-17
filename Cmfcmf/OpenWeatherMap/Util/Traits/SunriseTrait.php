<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use DateTime;

trait SunriseTrait
{

    public $sunrise;

    /*
     * @param DateTime $sunrise
     * @return void
     */
    protected function setSunrise(DateTime $sunrise)
    {
        $this->sunrise = $sunrise;
        return $this;
    }

    /**
     *
     * @return DateTime
     */
    public function getSunrise(): DateTime
    {
        return $this->sunrise;
    }
}
