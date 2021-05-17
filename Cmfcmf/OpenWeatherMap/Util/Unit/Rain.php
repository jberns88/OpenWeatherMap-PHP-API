<?php

namespace Cmfcmf\OpenWeatherMap\Util\Unit;

use Cmfcmf\OpenWeatherMap\Util\Unit;

class Rain
{

    public static function factory($value)
    {
        return new Unit($value, 'mm');
    }
}
