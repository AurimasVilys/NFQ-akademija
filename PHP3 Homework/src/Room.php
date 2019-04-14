<?php

namespace Hotel;

class Room implements ReservableInterface, \JsonSerializable
{
    private $roomType;
    private $restroom;
    private $balcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $reservations;
    private $price;

    public function __construct($roomNumber)
    {
        $this->reservations = array();
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType($roomType): void
    {
        $this->roomType = $roomType;
    }

    /**
     * @return bool
     */
    public function getRestroom(): bool
    {
        return $this->restroom;
    }

    /**
     * @param bool $restroom
     */
    public function hasRestroom($restroom): void
    {
        $this->restroom = $restroom;
    }

    /**
     * @return bool
     */
    public function getBalcony(): bool
    {
        return $this->balcony;
    }

    /**
     * @param bool $balcony
     */
    public function hasBalcony($balcony): void
    {
        $this->balcony = $balcony;
    }

    /**
     * @return int
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    /**
     * @param int $bedCount
     */
    public function setBedCount($bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }


    /**
     * @return array
     */
    public function getExtras(): array
    {
        return $this->extras;
    }

    /**
     * @param array $extras
     */
    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @param array $reservations
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

    public function removeReservation($reservation)
    {
        $keyToRemove = array_search($reservation, $this->reservations);
        if(isset($keyToRemove)) {
            unset($this->reservations[$keyToRemove]);
        }
    }

    public function addReservation($reservation)
    {
        array_push($this->reservations, $reservation);
    }

    public function jsonSerialize()
    {
        return ['roomType' => $this->roomType,
                'restroom' => $this->restroom,
                'balcony' => $this->balcony,
                'bedCount' => $this->bedCount,
                'roomNumber' => $this->roomNumber,
                'extras' => $this->extras,
                'reservations' => $this->reservations,
                'price' => $this->price];
    }

    public function __toString()
    {
        return json_encode($this->jsonSerialize());
    }

}