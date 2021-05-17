<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait PopTrait
{

    public $pop;

    /**
     *
     * @param Unit $pop
     * @return void
     */
    protected function setPop(Unit $pop)
    {
        $this->pop = $pop;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getPop(): Unit
    {
        return $this->pop;
    }
}
