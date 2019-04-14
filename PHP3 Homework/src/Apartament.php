<?php

namespace Hotel;

class Apartament extends Room
{

    public function __construct($roomNumber, $roomPrice)
    {
        parent::__construct($roomNumber);
        $this->setPrice($roomPrice);
        $this->setBedCount(4);
        $this->setRoomType(RoomTypes::ROOM_TYPE_DIAMOND);
        $this->hasRestroom(true);
        $this->hasBalcony(true);
        $this->setExtras(['TV', 'air-conditioner','refrigerator',
            'kitchen box','mini-bar','bathtub','free Wi-Fi']);
    }

    public function __toString()
    {
        return parent::__toString();
    }
}