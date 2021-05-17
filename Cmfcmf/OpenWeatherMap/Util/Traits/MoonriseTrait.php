<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use DateTime;

trait MoonriseTrait
{

    public $moonrise;

    /*
     * @param DateTime $moonrise
     * @return void
     */
    protected function setMoonrise(DateTime $moonrise)
    {
        $this->moonrise = $moonrise;
        return $this;
    }

    /**
     *
     * @return DateTime
     */
    public function getMoonrise(): DateTime
    {
        return $this->moonrise;
    }
}
