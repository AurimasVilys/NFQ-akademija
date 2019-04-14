<?php

namespace Hotel;

class Bedroom extends Room
{
    public function __construct($roomNumber, $roomPrice)
    {
        parent::__construct($roomNumber);
        $this->setPrice($roomPrice);
        $this->setBedCount(2);
        $this->setRoomType(RoomTypes::ROOM_TYPE_GOLD);
        $this->hasRestroom(true);
        $this->hasBalcony(true);
        $this->setExtras(['TV', 'air-conditioner','refrigerator',
            'mini-bar','bathtub']);
    }

    public function __toString()
    {
        return parent::__toString();
    }
}