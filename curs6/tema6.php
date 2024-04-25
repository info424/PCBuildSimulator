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










