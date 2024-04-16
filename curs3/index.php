<?php


$a = 5;
$b = 7;
$c = 2;
$x = ($b - $a) * $c;
$y = $x % $c;


echo $x; echo '<br>';
echo $y; echo '<br>';


$a += 1;
$b -= 1;
$c *= 1;

echo $a.$b.$c; echo '<br>';



$t = 'text1';
$z = 'z';
$z.= $t;

echo $z; echo '<br>';


$x = (1 > 2);
var_dump($x); echo '<br>';

$x = (3 == 3);
var_dump($x); echo '<br>';

$x = ('3' == 3);
var_dump($x); echo '<br>';

$x =  ('3' === 3);
var_dump($x); echo '<br>';

$x = ('3' !== 3);
var_dump($x); echo '<br>';

$x = (1 != 2);
var_dump($x); echo '<br>';

$x = (3 >= 4);
var_dump($x); echo '<br>';

$x = (3 <=> 4);
var_dump($x); echo '<br>';


$j = 5;
var_dump($j++); echo '<br>';

$i = 7;
var_dump(--$i); echo '<br>';

// && -> si ambii sa fie true => true
// || -> sau cel putin unul sa fie true => true
// and , or sau xor
// iar daca !(a && b) => true, '!' va nega si va iesi false

var_dump(true && false); echo '<br>';
var_dump(true && true); echo '<br>';
var_dump(true || false); echo '<br>';
var_dump(false || true); echo '<br>';

$a = false && (false || true); echo '<br>';
var_dump($a); echo '<br>';

$a = false && false || true; echo '<br>';
var_dump($a); echo '<br>';


$a = 1;
$b = 0;

var_dump($a || $b );
var_dump($a);
var_dump($b);
var_dump(""  || 0 );

// String gol este fals tot timpul ''
// 0 este fals tot timpul


function scrie($ceva)
{
    echo $ceva;
    echo "\n";
    return false;
}



$a = true || scrie ('ceva cu ||');
var_dump($a); echo '<br>';

$a = false || scrie ('altceva cu ||');
var_dump($a); echo '<br>';

$a = true or scrie ('ceva cu or');
var_dump($a); echo '<br>';

$a = true && scrie('ceva cu &&');
var_dump($a); echo '<br>';



//Operatorul Ternar care este asemanator cu if else

$a = (2 < 3) ? 'text1' : 'text2';
var_dump($a); echo '<br>';

$x = 7;
$y = ($x % 2)? 'par' : 'impar';
var_dump($y); echo '<br>';



//refacem calculatorul si facem cu functii, pentru fiecare operator
//folosim operator ternar sa vedem daca b este 0












