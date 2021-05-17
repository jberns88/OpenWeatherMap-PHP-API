<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use Cmfcmf\OpenWeatherMap\Util\Unit;

trait VisibilityTrait
{

    public $visibility;

    /**
     *
     * @param Unit $visibility
     * @return void
     */
    protected function setVisibility(Unit $visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     *
     * @return Unit
     */
    public function getVisibility(): Unit
    {
        return $this->visibility;
    }
}
