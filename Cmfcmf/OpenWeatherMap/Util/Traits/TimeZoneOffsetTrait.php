<?php

namespace Cmfcmf\OpenWeatherMap\Util\Traits;


trait TimeZoneOffsetTrait
{

    public $timeZoneOffset;

    /**
     *
     * @param string $timeZoneOffset
     * @return void
     */
    protected function setTimeZoneOffset(string $timeZoneOffset)
    {
        $this->timeZoneOffset = $timeZoneOffset;
    }

    /**
     *
     * @return string
     */
    public function getTimeZoneOffset(): string
    {
        return $this->timeZoneOffset;
    }
}
