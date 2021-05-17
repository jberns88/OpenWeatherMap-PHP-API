<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait TempTrait
{

    public $temp;


    /**
     *
     * @param Unit $temp
     * @return void
     */
    protected function setTemp(Unit $temp)
    {
        $this->temp = $temp;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getTemp(): Unit
    {
        return $this->temp;
    }
}
