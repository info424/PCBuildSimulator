<?php

$a = true;

if ($a) {
    echo 'adevarat';
}

function test($val) {
    return false;
}

if ($b = test(5)){
    echo 'nu se apeleaza';
}




if ( 5 > 7 && 3 > 2) {
    echo 'nice';
}   elseif ( 4 < 5  ) {
    echo 'better';
}   else {
    echo 'nice to have';
}

// == => ex.: $x==$y Egalitate, returneaza true daca ambii operanzi au aceeasi valoare (chiar daca nu au acelasi tip)
// === => ex.: $x===$y Identitate, returneaza true daca ambii operanzi au aceeasi valoare si acelasi tip de date
// != => ex.: $x != $y Valori diferite. Returneaza true daca operanzii au valori diferite
// <=> => ex.: Spaceship


// if true = se afiseaza
// if false = nu se afiseaza
// else este un fel de sau


$card = 'visa';
if ($card == 'mastercard') {
    echo 'mastercard';
}   elseif ($card == 'visa') {
    echo 'visa';
}   else {
    echo 'amex';
}

// elseif > else dpdv al scrierii codului
// se poate scrie oricat de mult elseif/ else


$number = 1;
while ($number <= 10) {
    echo $number . '<br/>';
    $number++;
}

$i = 13;
do {
    echo $i . '<br/>';
    $i++;
}   while ($i <= 10);


// la for trebuie sa fie 3 lucruri in el
//init-conditie- incrementare

for ($x = 10; $x > 0; $x--) {
    echo $x . '<br/>';
}

$carColor = 'blue';
switch ($carColor) {
    case 'red';
    echo 'red';
    break;
    case  'green';
    echo  'green';
    break;
    default:
        echo 'no color';
        break;
}

// fara break nu se opreste codul



// ai doua variante de a include un alt cod de php
// include sau require, tho require > include


$person = null;

$marian = ($person) ?? 'Marian';

echo $marian . '<br/>';

















