<?php

namespace Cmfcmf\OpenWeatherMap\Util\Unit;

use Cmfcmf\OpenWeatherMap\Util\Unit;

class MoonPhase
{

    public static function factory($value)
    {
        return new Unit($value, '');
    }
}
