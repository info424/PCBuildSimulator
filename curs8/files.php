<?php

$cars = fopen('cars.txt', 'r+');

if ($cars == false) {
    echo 'Error in opening file';
}

$filesize = filesize('cars.txt');
$carsTxt = fread($cars, $filesize);

var_dump($carsTxt, $filesize);
if (is_writable('cars.txt')) {
    fwrite($cars, "\n\n other cars here");
}



//fwrite($cars, '\n other cars here', 50);
fclose($cars);


//change file permission to rwx - rw- r ( owner - groups - others )

if(chmod ('cars.txt', 764)) {
    echo 'changed';
}   else {
    echo 'error';
}


















