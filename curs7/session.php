<?php


session_start();

if (isset($_SESSION['counter'])){
    $_SESSION['counter']++;
}   else {
    $_SESSION['counter'] = 1;
}

echo 'You visited this page ' . $_SESSION['counter'] . ' times.';

//ambele finalizeaza o sesiune
//unset($_SESSION['counter']); - sterge variabila
//session_destroy(); - asta sterge tot



















