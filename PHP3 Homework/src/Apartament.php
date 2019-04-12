<?php

namespace Hotel;

class Apartament extends Room
{

    public function __construct($roomNumber, $roomPrice)
    {
        parent::__construct();
        $this->setRoomNumber($roomNumber);
        $this->setPrice($roomPrice);
        $this->setBedCount(4);
        $this->setRoomType(RoomTypes::ROOM_TYPE_DIAMOND);
        $this->hasRestroom(true);
        $this->hasBalcony(true);
        $this->setExtras(['TV', 'air-conditioner','refrigerator',
            'kitchen box','mini-bar','bathtub','free Wi-Fi']);
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