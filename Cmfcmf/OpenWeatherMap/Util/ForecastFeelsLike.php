<?php

namespace Cmfcmf\OpenWeatherMap\Util;

class ForecastFeelsLike extends AbstractContainer
{

    /**
     * @var Unit The morning temperature. Might not be null.
     */
    public $morn;

    /**
     * @var Unit The day temperature. Might not be null.
     */
    public $day;

    /**
     * @var Unit The evening temperature. Might not be null.
     */
    public $eve;

    /**
     * @var Unit The night temperature. Might not be null.
     */
    public $night;

    /**
     *
     * @param Unit $morn
     * @return void
     */
    public function setMorn(Unit $morn)
    {
        $this->morn = $morn;
    }


    /**
     *
     * @param Unit $day
     * @return void
     */
    public function setDay(Unit $day)
    {
        $this->day = $day;
    }

    /**
     *
     * @param Unit $eve
     * @return void
     */
    public function setEve(Unit $eve)
    {
        $this->eve = $eve;
    }

    /**
     *
     * @param Unit $night
     * @return void
     */
    public function setNight(Unit $night)
    {
        $this->night = $night;
    }

}



