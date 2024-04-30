<?php


function numereReturnate($vector , $vector2)
{
    return array_intersect($vector , $vector2);
}

$vector = [1,2,3,4,5,6,7,8,9];
$vector2 = [1,4,5,6,];

print_r(numereReturnate($vector, $vector2));

// array_intersect => face exact ce ii spune numele


// t2
function countElementLengths($vector)
{
    // Initialize with mltp arrays
    $counts = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 'more' => 0);

    // iteratationes of the elements from the array
    foreach ($vector as $element) {
        // get length
        $length = strlen($element);

        // update based on the length
        if ($length <= 4) {
            $counts[$length]++;
        } else {
            $counts['more']++;
        }
    }

    // Print la nrs
    foreach ($counts as $length => $count) {
        echo "Number of elements with $length characters: $count\n" . '<br>';
    }
}

// ex;
$vector = ['a', 'ab', 'abc', 'abcd', 'abcde', 'abcdef'];

// call la fcn
countElementLengths($vector);


//functie which receives 2 params
// first param => vector of vectors
// second param => simple vector
// elements of param 2 = foreach element <= 3

function elements($arrayOfArrays, $array)
{
    foreach ($arrayOfArrays as $subArray){
        if (count($subArray) <= 3){
            $subArray = array_merge($subArray, $array);
        }
    }
    return $arrayOfArrays;
}

$arrayOfArrays = [[1, 3, 4], [5, 6] ,[9]];
$array = [ 'a', 'b', 'c', 'd', 'e', 'f' ]   ;

print_r(elements($arrayOfArrays, $array));

// facem o functie addelements care are 2 params
// inauntrul ei ++arrays of array
// foreeach subarray => check if there are 3 or less elements. If does we add the elements from the second parameter to the sub array with arraymerhe 



function initVector()
{

    $vector = array();

    // Pentru fiecare index de la 0 la 9
    for ($i = 0; $i < 10; $i++) {
        // + un vector asociativ cu cheile 'nume', 'oraş' și 'telefon', toate cu valoarea 'Null'.
        $vector[$i] = array('nume' => Null, 'oraş' => Null, 'telefon' => Null);
    }

    // Returnam la final vector
    return $vector;
}





//
// alta functie
function popVector($vector, $index, $nume, $oras, $telefon)
{
    //
    if (isset($vector[$index])) {
        $vector[$index] = array('nume' => $nume, 'oraş' => $oras, 'telefon' => $telefon);
//    $vector[$index]['nume'] = $nume;

    }

    return $vector;
}

$persoane = initVector();
$persoaneCuValori = popVector($persoane, 2 , 'David', 'Bucuresti', '055555');

var_dump($persoane, $persoaneCuValori);


// print_r => pentru arrays
// print => afisare de texte
// echo => afis de valori pentru arrays/string
// var_dump => iti ofera mai multe detalii (tipul variabile, date etc.)


























