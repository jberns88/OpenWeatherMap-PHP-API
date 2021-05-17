<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;

use DateTime;

trait DateTrait
{

    public $date;

    /*
     * @param DateTime $date
     * @return void
     */
    protected function setDate(DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     *
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }
}
