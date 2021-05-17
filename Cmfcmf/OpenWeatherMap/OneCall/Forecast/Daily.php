<?php

namespace Cmfcmf\OpenWeatherMap\OneCall\Forecast;

use Cmfcmf\OpenWeatherMap\Util\AbstractContainer;
use Cmfcmf\OpenWeatherMap\Util\ForecastFeelsLike;
use Cmfcmf\OpenWeatherMap\Util\ForecastTemperature;
use Cmfcmf\OpenWeatherMap\Util\Traits\CloudsTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\DateTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\DewPointTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\HumidityTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\MoonPhaseTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\MoonriseTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\MoonsetTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\PopTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\PressureTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\RainTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\SnowTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\SunriseTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\SunsetTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\UviTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\WeatherIteratorTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\WindTrait;

class Daily extends AbstractContainer
{
    use DateTrait;
    use SunriseTrait;
    use SunsetTrait;
    use MoonriseTrait;
    use MoonsetTrait;
    use MoonPhaseTrait;
    use PressureTrait;
    use HumidityTrait;
    use DewPointTrait;
    use WindTrait;
    use CloudsTrait;
    use UviTrait;
    use PopTrait;
    use RainTrait;
    use SnowTrait;
    use WeatherIteratorTrait;
    

    public $temp;
    public $feelsLike;

    /**
     *
     * @param ForecastTemperature $temp
     * @return void
     */
    public function setTemp(ForecastTemperature $temp)
    {
        $this->temp = $temp;
    }

    /**
     *
     * @param ForecastFeelsLike $feelsLike
     * @return void
     */
    public function setFeelsLike(ForecastFeelsLike $feelsLike)
    {
        $this->feelsLike = $feelsLike;
    }
}
