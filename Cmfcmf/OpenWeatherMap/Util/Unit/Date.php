<?php

namespace Cmfcmf\OpenWeatherMap\Util\Unit;

use DateTime;
use DateTimeZone;

class Date
{

    public static function factory($value, DateTimeZone $timeZone = null)
    {
        $dt = new DateTime();
        if ($timeZone) {
            $dt->setTimezone($timeZone);
        }
        $dt->setTimestamp($value);

        return $dt;
    }
}
