<?php

namespace Hotel;

class Reservation
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
     * @return mixed
     */
    public function getStarDate() : \DateTime
    {
        return $this->starDate;
    }

    /**
     * @param mixed $starDate
     */
    public function setStarDate($starDate): void
    {
        $this->starDate = $starDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
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
     * @param mixed $guest
     */
    public function setGuest($guest): void
    {
        $this->guest = $guest;
    }


}