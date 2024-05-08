<?php

require_once('Address.php');
require('Person.php');

class Registry {
    public array $people;

    function __construct($person) {
        $this->addPerson($person);
    }

    public function addPerson($person){
        $this->people[] = $person;
}
    public function __destruct(){
        echo 'distrus';
    }
}


$adress1 = new Address('Romania', 'Bucuresti', 'Radu Calomfirescu',13 , '077191' );
$person1 = new Person('Marian', 'Trifu', $adress1);
$registry = new Registry($person1);
$adress2 = new Address('Romania', 'Constanta', 'Radu Calomfirescu', 13, '077191' );
$person2 = new Person('Marian', 'Trifu', $adress2);
$registry->addPerson($person2);


unset($registry);
//var_dump($registry);

