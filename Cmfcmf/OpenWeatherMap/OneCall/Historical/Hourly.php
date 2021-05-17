<?php

namespace Cmfcmf\OpenWeatherMap\OneCall\Historical;

use Cmfcmf\OpenWeatherMap\Util\AbstractContainer;
use Cmfcmf\OpenWeatherMap\Util\Traits\CloudsTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\DateTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\DewPointTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\FeelsLikeTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\HumidityTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\PressureTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\RainfallTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\SnowfallTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\TempTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\VisibilityTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\WeatherIteratorTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\WindTrait;

class Hourly extends AbstractContainer
{

    use DateTrait;
    use TempTrait;
    use FeelsLikeTrait;
    use PressureTrait;
    use HumidityTrait;
    use DewPointTrait;
    use CloudsTrait;
    use VisibilityTrait;
    use WindTrait;
    use RainfallTrait;
    use SnowfallTrait;
    use WeatherIteratorTrait;
}
