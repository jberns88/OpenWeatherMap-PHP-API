<?php

namespace Cmfcmf\OpenWeatherMap\Util\Unit;

use Cmfcmf\OpenWeatherMap\Util\Unit;

class Temperature
{
    public static function factory($value, $units = "", $description = "", $precision = null)
    {
        return new Unit($value, self::getUnits($units), $description, $precision);
    }

    protected static function getUnits(string $units): string
    {
        switch (strtolower($units)) {
            case 'metric':
                return '°C';
            case 'imperial':
                return '°F';
            default:
                return '°K';
        }
    }
}
