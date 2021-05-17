<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use DateTimeZone;

trait TimeZoneTrait
{

    public $timeZone;

    /**
     *
     * @param DateTimeZone $timeZone
     * @return void
     */
    protected function setTimeZone(DateTimeZone $timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     *
     * @return DateTimeZone
     */
    public function getTimeZone(): DateTimeZone
    {
        return $this->timeZone;
    }
}
