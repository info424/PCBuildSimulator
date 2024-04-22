<?php

// o functie cu 2 param (nr only)
// arata toate numerele divizibile cu 3 cuprinse intre cele 2 valori primite

function afiseazaDivizibileCu3($numar1, $numar2) {
    for ($i = $numar1; $i <= $numar2; $i++) {
        if ($i % 3 == 0) {
            echo $i . " ";
        }
    }
}


function numaraNumerePare($vector) {
    $retn = 0;
    foreach ($vector as $numar) {
        if ($numar % 2 == 0) {
            $retn++;
        }
    }
    echo "Vectorul contine " . $retn . " numere pare.";
}





function Palindrom($numar) {
    $numarInversat = strrev($numar);
    if ($numar == $numarInversat) {
        echo $numar . " este palindrom.";
    } else {
        echo $numar . " nu este palindrom.";
    }
}

// strrev face sa fie pe dos - reverses a string
//The strrev() function reverses a string.







