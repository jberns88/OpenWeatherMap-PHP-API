<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait FeelsLikeTrait
{

    public $feels_like;

    /**
     *
     * @param Unit $feels_like
     * @return void
     */
    protected function setFeelsLike(Unit $feels_like)
    {
        $this->feels_like = $feels_like;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getFeelsLike(): Unit
    {
        return $this->feels_like;
    }
}
