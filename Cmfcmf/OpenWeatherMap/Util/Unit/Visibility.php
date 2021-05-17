<?php

namespace Cmfcmf\OpenWeatherMap\Util\Unit;

use Cmfcmf\OpenWeatherMap\Util\Unit;

class Visibility
{

    public static function factory($value)
    {
        return new Unit($value, 'm');
    }
}
