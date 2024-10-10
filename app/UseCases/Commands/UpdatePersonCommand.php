<?php 
namespace App\UseCases\Commands;

class UpdatePersonCommand {
    public function __construct(
        public $id,
        public $firstName,
        public $lastName,
        public $email,
        public $phone,
        public $address
    ) {}

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }
}
