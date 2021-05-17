<?php

use Cmfcmf\OpenWeatherMap;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

require_once __DIR__ . '/bootstrap.php';

// You can use every PSR-17 compatible HTTP request factory
// and every PSR-18 compatible HTTP client.
$httpRequestFactory = new RequestFactory();
$httpClient = GuzzleAdapter::createWithConfig([]);

$owm = new OpenWeatherMap($myApiKey, $httpClient, $httpRequestFactory);

$fw = $owm->getOneCallForecastWeather(
    ['lat' => 51.34736583018974, 'lon' => 0.5074173648026123],
    OpenWeatherMap::UNIT_METRIC
);

$nearest = $fw->hourly->findNearest('15:00');

echo json_encode($fw, JSON_PRETTY_PRINT);
exit;
