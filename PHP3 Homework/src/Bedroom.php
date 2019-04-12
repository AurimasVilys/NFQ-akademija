<?php

namespace Hotel;

class Bedroom extends Room
{
    public function __construct($roomNumber, $roomPrice)
    {
        parent::__construct();
        $this->setRoomNumber($roomNumber);
        $this->setPrice($roomPrice);
        $this->setBedCount(2);
        $this->setRoomType(RoomTypes::ROOM_TYPE_GOLD);
        $this->hasRestroom(true);
        $this->hasBalcony(true);
        $this->setExtras(['TV', 'air-conditioner','refrigerator',
            'mini-bar','bathtub']);
    }

    public function removeReservation($reservation)
    {
        $keyToRemove = array_search($reservation, $this->getReservations());
        if(isset($keyToRemove)) {
            unset($this->getReservations()[$keyToRemove]);
        }
    }

    public function addReservation($reservation)
    {
        array_push($this->getReservations(), $reservation);
    }
}