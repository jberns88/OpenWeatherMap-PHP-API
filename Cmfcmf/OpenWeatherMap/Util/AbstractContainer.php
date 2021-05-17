<?php

namespace Cmfcmf\OpenWeatherMap\Util;


abstract class AbstractContainer
{

    public function __construct(array $values)
    {
        $this->init($values);
    }


    private function init(array $values)
    {
        foreach ($values as $key => $value) {
            $method = 'set' . ucFirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            } else {
                throw new \RuntimeException("method '" . $method . "' does not exist and '" . $key . "' could not be set");
            }
        }
    }
}
