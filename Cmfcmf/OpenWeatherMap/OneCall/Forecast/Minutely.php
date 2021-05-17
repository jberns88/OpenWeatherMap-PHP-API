<?php

namespace Cmfcmf\OpenWeatherMap\OneCall\Forecast;

use Cmfcmf\OpenWeatherMap\Util\AbstractContainer;
use Cmfcmf\OpenWeatherMap\Util\Traits\DateTrait;
use Cmfcmf\OpenWeatherMap\Util\Traits\PrecipitationTrait;

class Minutely extends AbstractContainer
{
    use DateTrait;
    use PrecipitationTrait;
}
