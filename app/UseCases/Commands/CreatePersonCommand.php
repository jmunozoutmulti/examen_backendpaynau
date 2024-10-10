<?php

namespace App\UseCases\Commands;

class CreatePersonCommand
{
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $address;

    public function __construct($firstName, $lastName, $email, $phone, $address)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
