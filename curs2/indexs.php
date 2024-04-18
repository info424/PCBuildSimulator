<?php
// avem de facut 2 variabile pentru valori a si b
// + 1 o variabila pentru rezultat
// 4 variabile pentru tipul operatiei

function calculator($a, $b)
{
    // Definirea operatiilor
    $adunare = $a + $b;
    $scadere = $a - $b;
    $inmultire = $a * $b;
    $impartire = $b != 0 ? $a / $b : 'Impartire la zero';

    // Afisarea rezultatelor
    echo "Rezultatul adunarii este: $adunare<br>";
    echo "Rezultatul scaderii este: $scadere<br>";
    echo "Rezultatul inmultirii este: $inmultire<br>";
    echo "Rezultatul impartirii este: $impartire<br>";
}

// Apelarea functiei cu valori de test
calculator(30, 40);


function adunare($a, $b) {
    return $a + $b;
}

function scadere($a, $b) {
    return $a - $b;
}

function inmultire($a, $b) {
    return $a * $b;
}

function impartire($a, $b) {
    $b = $b != 0 ? $b : 1;
    return $a / $b;
}