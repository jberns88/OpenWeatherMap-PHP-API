<?php

namespace Cmfcmf\OpenWeatherMap\Util;

class ForecastTemperature extends AbstractContainer
{

    /**
     * @var Unit The minimal temperature.
     */
    public $min;

    /**
     * @var Unit The maximal temperature.
     */
    public $max;

    /**
     * @var Unit The day temperature. Might not be null.
     */
    public $day;

    /**
     * @var Unit The morning temperature. Might not be null.
     */
    public $morn;

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

    /**
     *
     * @param Unit $min
     * @return void
     */
    public function setMin(Unit $min)
    {
        $this->min = $min;
    }

    /**
     *
     * @param Unit $max
     * @return void
     */
    public function setMax(Unit $max)
    {
        $this->max = $max;
    }
}
