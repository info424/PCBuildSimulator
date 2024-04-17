<?php
// avem de facut 2 variabile pentru valori a si b
// + 1 o variabila pentru rezultat
// 4 variabile pentru tipul operatiei

$a = 7;
$b = 3.8;

$e = $a * $b;
$f = $a / $b;
$g = $a - $b;
$h = $a + $b;

echo $e; echo ' <-inmultire'; echo '<br>';
echo $f; echo ' <-impartire'; echo '<br>';
echo $g; echo ' <-scadere'; echo '<br>';
echo $h; echo ' <-adunare'; echo '<br>';

// test
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
            $result = $first_num + $second_num;
            break;
        case "Subtract":
            $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case  "Divide":
            $result = $first_num / $second_num;
            break;
    }
}

