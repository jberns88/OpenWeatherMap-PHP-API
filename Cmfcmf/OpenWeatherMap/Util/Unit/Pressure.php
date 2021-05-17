<?php

namespace Cmfcmf\OpenWeatherMap\Util\Unit;

use Cmfcmf\OpenWeatherMap\Util\Unit;

class Pressure
{

    public static function factory($value)
    {
        return new Unit($value, 'hPa');
    }
}
