<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use DateTime;

trait MoonsetTrait
{

    public $moonset;

    /*
     * @param DateTime $moonset
     * @return void
     */
    protected function setMoonset(DateTime $moonset)
    {
        $this->moonset = $moonset;
        return $this;
    }


    public function getMoonset(): DateTime
    {
        return $this->moonset;
    }
}
