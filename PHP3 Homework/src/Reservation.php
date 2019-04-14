<?php

namespace Hotel;

class Reservation implements \JsonSerializable
{
    public function __construct($starDate, $endDate, $guest)
    {
        $this->starDate = $starDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    private $starDate;
    private $endDate;
    private $guest;

    /**
     * @return \DateTime
     */
    public function getStarDate() : \DateTime
    {
        return $this->starDate;
    }

    /**
     * @param \DateTime $starDate
     */
    public function setStarDate($starDate): void
    {
        $this->starDate = $starDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    /**
     * @param Guest $guest
     */
    public function setGuest($guest): void
    {
        $this->guest = $guest;
    }

    public function jsonSerialize()
    {
        return ['starDate' => $this->starDate,
            'endDate' => $this->endDate,
            'guest' => $this->guest];
    }

    public function __toString()
    {
        return json_encode($this->jsonSerialize());
    }

}