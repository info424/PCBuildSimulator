<?php

require_once('Address.php');
class Person {
    public string $firstName;
    public string $lastName;

    public Address $address;

    public function __construct($firstName, $lastName, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
    }

    public function getFirstName(){
        return $this->firstName;
    }

}













