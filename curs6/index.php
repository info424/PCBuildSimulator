<?php

$name = "Marian";
$empty = '';

echo 'Alex\'s <br/>';
echo  "Ana's \"Marian\"<br/>";
echo 'alex \\ marius';
echo "\$";
$variabila = 10;
echo "\$variabila = {$variabila} <br>";


echo strlen($name) . '<br/>';


$lastName = 'Alexandru este la mare';
echo strpos($lastName, 'este') . "<br/>";
if (strpos($lastName, 'este') !== false) {
    echo 'found';
} else {
    echo 'not found <br> ';
}


echo strstr($lastName, 'Este') . '<br>';
// this mofo e case sensitive
echo stristr($lastName, 'este') . '<br>';
// this is not case sens

echo substr($lastName, 7, 10) . '<br>';

echo substr($lastName, 7, -4) . '<br>';

echo strtoupper($lastName) . '<br>';

echo strtolower($lastName) . '<br>';

echo ucfirst($lastName) . '<br>';

echo ucwords($lastName) . '<br>';

echo 'altceva' . trim('     text     ') . '<br>';


echo nl2br('this is a new text') . '<br>';

echo str_replace(' ', '---' , $lastName) . '<br>';
















