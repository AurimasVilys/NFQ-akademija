<?php

namespace Hotel;

interface ReservableInterface
{
    public function addReservation($reservation);
    public function removeReservation($reservation);
}