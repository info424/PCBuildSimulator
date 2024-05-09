<?php

require_once ('Dog.php');
require_once ('Bird.php');
require_once ('StringHelper.php');
require_once ('Azor.php');

$dog = new Dog('Pufi');
$dog->setLegs(4);


//$animal = new Animal ('Tedi');
$bird = new Bird('Loli');

//echo $animal->getLegs();
echo '<br>';
echo $dog->getLegs();
echo '<br>';
echo $dog->bark();
echo '<br>';
echo $dog->move();
echo '<br>';
echo $bird->move();
echo '<br>';
echo StringHelper::toCamelCase('LOLI');

new Azor();


//var_dump($dog);



















