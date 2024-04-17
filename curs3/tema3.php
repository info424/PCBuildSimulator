<?php
function operatii(\$a, \$b, \$n, \$x, \$y, \$param1, \$param2, \$param3) {
    // Operatii matematice
    \$operatii = [
        'adunare' => \$a + \$b,
        'scadere' => \$a - \$b,
        'inmultire' => \$a * \$b,
        'impartire' => \$b != 0 ? \$a / \$b : 'Impartire la zero',
        'modul' => \$a % \$b,
        'putere' => pow(\$a, \$b)
    ];

    foreach (\$operatii as \$op => \$rezultat) {
        echo "Rezultatul operatiei de \$op este: \$rezultat<br>";
    }

    \$maxVal = max(\$operatii);
    \$maxOp = array_search(\$maxVal, \$operatii);
    echo "Operatia care produce cel mai mare rezultat este: \$maxOp cu valoarea \$maxVal<br>";

    // Tabla inmultirii
    if (\$n >= 0 && \$n <= 10) {
        for (\$i = 0; \$i <= 10; \$i++) {
            echo "\$n x \$i = " . (\$n * \$i) . "<br>";
        }
    } else {
        echo "Parametrul nu se află în intervalul 0 - 10.<br>";
    }

    // Comparatii
    echo "\$x este " . (\$x < \$y ? "mai mic" : "nu este mai mic") . " decât \$y<br>";
    echo "\$x este " . (\$x <= \$y ? "mai mic sau egal" : "nu este mai mic sau egal") . " cu \$y<br>";
    echo "\$x " . (\$x == \$y ? "este egal" : "nu este egal") . " cu \$y<br>";
    echo "\$x este " . (\$x >= \$y ? "mai mare sau egal" : "nu este mai mare sau egal") . " cu \$y<br>";
    echo "\$x este " . (\$x > \$y ? "mai mare" : "nu este mai mare") . " decât \$y<br>";

    // Operatie conditii
    \$param2 = \$param2 <= 0 ? 1 : \$param2;
    \$param3 = \$param3 <= 0 ? 2 : \$param3;

    if ((\$param1 - \$param2) > 5 && (\$param3 % 2) == 0) {
        echo "Rezultatul este: " . (pow((\$param1 / \$param2), \$param2));
    } else {
        echo "Condițiile nu sunt îndeplinite.";
    }
}
?>
