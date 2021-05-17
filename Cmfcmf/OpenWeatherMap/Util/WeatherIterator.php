<?php

namespace Cmfcmf\OpenWeatherMap\Util;

use ArrayIterator;
use BadMethodCallException;

class WeatherIterator extends ArrayIterator
{
    public function __get($name)
    {
        if (!$this->offsetExists(0)) {
            throw new BadMethodCallException('No weather found');
        }

        return $this->offsetGet(0)->$name;
    }

    public function hasWeather(): bool
    {
        return count($this) > 0;
    }
}
