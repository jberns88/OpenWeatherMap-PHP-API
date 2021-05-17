<?php

namespace Cmfcmf\OpenWeatherMap\Util;

use ArrayIterator;
use DateTime;
use DateTimeZone;

class DateIterator extends ArrayIterator
{
    protected $tz;

    /**
     * Undocumented function
     *
     * @param array $items
     * @param DateTimeZone $tz
     */
    public function __construct(array $items, DateTimeZone $tz)
    {
        $this->tz = $tz;
        parent::__construct($items);
    }

    /**
     *
     * @param string $date
     * @param DateTimeZone $tz
     * @return void
     */
    public function findNearest(string $date, DateTimeZone $tz = null)
    {
        $userDate = new DateTime($date, $tz ?: $this->tz);
        $userTs = $userDate->getTimeStamp();

        $interval = [];
        foreach ($this as $key => $dateAwareItem) {
            $date = $dateAwareItem->getDate();
            $ts = $date->getTimestamp();
            $interval[$key] = abs($userTs - $ts);
        }

        asort($interval);
        $closest = key($interval);

        return $this[$closest];
    }
}
