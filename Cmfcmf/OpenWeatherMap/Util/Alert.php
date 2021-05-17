<?php

namespace Cmfcmf\OpenWeatherMap\Util;

use DateTime;

class Alert extends AbstractContainer
{

    /**
     * Name of the alert source
     *
     * @var string
     */
    public $sender_name;
    /**
     * Alert event name
     *
     * @var string
     */
    public $event;

    /**
     * Date and time of the start of the alert
     *
     * @var DateTime
     */
    public $start;

    /**
     * Date and time of the end of the alert
     *
     * @var DateTime
     */
    public $end;

    /**
     * Description of the alert
     *
     * @var string
     */
    public $description;


    /**
     *
     * @param string $senderName
     * @return void
     */
    public function setSenderName(string $senderName)
    {
        $this->sender_name = $senderName;
    }

    /**
     *
     * @param string $event
     * @return void
     */
    public function setEvent(string $event)
    {
        $this->event = $event;
    }

    /**
     *
     * @param DateTime $start
     * @return void
     */
    public function setStart(DateTime $start)
    {
        $this->start = $start;
    }

    /**
     *
     * @param DateTime $end
     * @return void
     */
    public function setEnd(DateTime $end)
    {
        $this->end = $end;
    }

    /**
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
