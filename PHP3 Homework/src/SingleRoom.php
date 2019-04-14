<?php

namespace Hotel;

class SingleRoom extends Room implements RoomTypes
{

    public function __construct($roomNumber, $roomPrice)
    {
        parent::__construct($roomNumber);
        $this->setPrice($roomPrice);
        $this->setBedCount(1);
        $this->setRoomType(RoomTypes::ROOM_TYPE_STANDARD);
        $this->hasRestroom(true);
        $this->hasBalcony(false);
        $this->setExtras(['TV', 'air-conditioner']);
    }

    public function __toString()
    {
        return parent::__toString();
    }
}