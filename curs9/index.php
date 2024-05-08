<?php

class Car {
    protected $name; //o proprietate a clasei; tot este public poate fi apelat de oricine. Ca sa fie privata trebuie sa punem protected sau privat

    public function setName($carName) {
        if(!is_string($carName)) {
            exit('Variabila trebuie sa fie string');
        }
        $this->name = $carName;
    }

    public function startEngine() {
        echo 'engine started '. $this->name .' <br>'; //$this se foloseste doar in interior clasei si este instanta clasei, adica pentru fiecare obiect al clasei
    }

    public function go() {
        $this->startEngine();

        echo 'gone <br>';
    }
}

$car1 = new Car();
$car2 = new Car();

$car1->setName('Mercedes');
$car2->setName(9);

$car1->startEngine();
$car2->go();

//var_dump($car1, $car2);
?>