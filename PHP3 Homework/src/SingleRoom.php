<?php

namespace Hotel;

class SingleRoom extends Room implements RoomTypes
{

    public function __construct($roomNumber, $roomPrice)
    {
        parent::__construct();
        $this->setRoomNumber($roomNumber);
        $this->setPrice($roomPrice);
        $this->setBedCount(1);
        $this->setRoomType(RoomTypes::ROOM_TYPE_STANDARD);
        $this->hasRestroom(true);
        $this->hasBalcony(false);
        $this->setExtras(['TV', 'air-conditioner']);
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