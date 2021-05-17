<?php

namespace Cmfcmf\OpenWeatherMap\Util;

use BadMethodCallException;

abstract class AbstractVolume extends AbstractContainer
{

    public $oneHour;

    protected function setOneHour(Unit $oneHour)
    {
        $this->oneHour = $oneHour;
        return $this;
    }

    public function __toString()
    {
        return (string) $this->oneHour;
    }

    public function __call($name, $args)
    {
        if (!$this->oneHour) {
            throw new BadMethodCallException('No volume data found');
        }

        return call_user_func_array([$this->oneHour, $name], $args);
    }
}
