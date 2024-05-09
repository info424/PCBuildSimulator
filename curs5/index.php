<?php

$cars  = ['vw', 'mercedes', 'renault'];

foreach ($cars as $key => $car) {
    echo $key . ' -> ' . $car . '<br/>';
}

$boats =[];
$boats[0] = 'honda';
$boats[2] = 'suzuki';
$boats[7] = 'yamaha';

foreach ($boats as $key => $boat) {
    echo $key . ' -> ' . $boat . '<br/>';
}

$person1 = [
    'name' => 'Cristi',
    'lastname' => 'Alexandru',
];
$person2 = [
    'name' => 'Marius',
    'lastname' => 'Alexandru',
];
$persons = [$person1 , $person2];

foreach ($persons as $person){
    echo $person ['name'] . ' ' . $person ['lastname'] . '<br/>';
}


sort($cars);
foreach ($cars as $key => $car) {
    echo $key . ' -> ' . $car . '<br/>';
}
// sort iti sorteaza valorile pe care le ai intr-un vector in ordine crescatoare

rsort($cars);
foreach ($cars as $key => $car) {
    echo $key . ' -> ' . $car . '<br/>';
}


$numbers = [6, 7, 9, 3, 11, 70, 2];
print_r($numbers); echo '<br/>';
sort($numbers);
print_r($numbers);


$age =['Marian' => 25, 'Alex' => 33, 'Marius' => 70];
print_r($age); echo '<br/>';
asort($age);
print_r($age); echo '<br/>';
arsort($age); echo '<br/>';
print_r($age); echo '<br/>';
ksort($age); echo '<br/>';
print_r($age); echo '<br/>';
krsort($age); echo '<br/>';
print_r($age); echo '<br/>';





