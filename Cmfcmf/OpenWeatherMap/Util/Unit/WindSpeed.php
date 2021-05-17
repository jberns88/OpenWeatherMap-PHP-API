<?php

namespace Cmfcmf\OpenWeatherMap\Util\Unit;

use Cmfcmf\OpenWeatherMap\Util\Unit;

class WindSpeed
{
    public static function factory($value, $units = "", $description = "", $precision = null)
    {
        return new Unit($value, self::getUnits($units), $description, $precision);
    }

    protected static function getUnits(string $units): string
    {
        switch (strtolower($units)) {
            case 'imperial':
                return 'mph';
            case 'metric':
            default:
                return 'm/s';
        }
    }
}
