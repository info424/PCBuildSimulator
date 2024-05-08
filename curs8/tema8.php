<?php

//cookies
// numele +valoare la cookie
$cookie_name = "my_cookie";
$cookie_value = "Aceasta este valoarea cookie-ului.";

// exp. la cookie(5 minute)
$expire_time = time() + (60 * 5);

// Setarea ck
setcookie($cookie_name, $cookie_value, $expire_time, "/");

// +cookie avail. +
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie-ul cu numele '" . $cookie_name . "' există!<br>";
    echo "Valoarea este: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie-ul cu numele '" . $cookie_name . "' nu exista.";
}



//2cks
session_start();

// ver daca exista o sesiune pentru numarul curent de accesari care este
if (!isset($_SESSION['access_count'])) {
    $_SESSION['access_count'] = 1; // dam init la nr de accesari
} else {
    $_SESSION['access_count']++; // ++ la numar de acc
}

echo '<br>';
echo "Numarul de accesari al paginii: " . $_SESSION['access_count'];



















