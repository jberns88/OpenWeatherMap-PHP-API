<?php

namespace Cmfcmf\OpenWeatherMap\OneCall\Forecast;

use Cmfcmf\OpenWeatherMap\OneCall\Historical\Hourly as HistoricalHourly;
use Cmfcmf\OpenWeatherMap\Util\Traits\PopTrait;

class Hourly extends HistoricalHourly
{
    use PopTrait;
}
