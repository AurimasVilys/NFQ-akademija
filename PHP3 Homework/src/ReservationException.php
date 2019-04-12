<?php


namespace Hotel;


class ReservationException extends \RuntimeException
{
    public function __construct($message) {
        parent::__construct($message);
    }

    public function __toString() {
        return __CLASS__ . ": {$this->message}\n";
    }
}