<?php

namespace Hotel;

class Room implements ReservableInterface
{
    private $roomType;
    private $restroom;
    private $balcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $reservations;
    private $price;

    public function __construct()
    {
        $this->reservations = array();
    }

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType): void
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getRestroom(): bool
    {
        return $this->restroom;
    }

    /**
     * @param mixed $restroom
     */
    public function hasRestroom($restroom): void
    {
        $this->restroom = $restroom;
    }

    /**
     * @return mixed
     */
    public function getBalcony(): bool
    {
        return $this->balcony;
    }

    /**
     * @param mixed $balcony
     */
    public function hasBalcony($balcony): void
    {
        $this->balcony = $balcony;
    }

    /**
     * @return mixed
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return mixed
     */
    public function getExtras(): array
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @param mixed $reservations
     */
    public function setReservations($reservations): void
    {
        $this->reservations = $reservations;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function isRoomAvailable($startDate, $endDate): bool  {
        foreach ($this->reservations as $reservation) {
            if($reservation->getStarDate() <= $startDate && $reservation->getEndDate() >= $endDate) {
                return false;
            }
        }
        return true;
    }

    public function removeReservation($reservation){}

    public function addReservation($reservation){}

}