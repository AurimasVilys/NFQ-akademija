<?php

namespace Hotel;

class Guest implements \JsonSerializable
{

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    private $firstName;
    private $lastName;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getGuestFullName(): string {
        return $this->firstName.' '.$this->lastName;
    }

    public function jsonSerialize()
    {
        return ['firstName' => $this->firstName,
            'lastName' => $this->lastName];
    }

    public function __toString()
    {
        return json_encode($this->jsonSerialize());
    }
}