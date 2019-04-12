<?php

namespace Hotel;

class BookingManager
{
    public static function bookRoom($room, Reservation $reservation) {
        if($room->isRoomAvailable($reservation->getStarDate(), $reservation->getEndDate())) {
            $room->addReservation($reservation);
            echo 'Room <strong>'.$room->getRoomNumber().'</strong> successfully booked for <strong>'.
                $reservation->getGuest()->getGuestFullName().
                '</strong> from <time>'.$reservation->getStarDate()->format('Y-m-d').
                '</time> to <time>'.$reservation->getEndDate()->format('Y-m-d').'</time>!';
            echo PHP_EOL;
        }
        else {
            throw new ReservationException('Room <strong>'.$room->getRoomNumber().'</strong> is not available from <time>'.
                $reservation->getStarDate()->getTimestamp().'</time> to <time>'.$reservation->getEndDate()->getTimestamp().'</time>!');
        }
    }
}