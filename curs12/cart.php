<?php

session_start();

use Ilbah\Shop\Cart;

require_once "index.php";

$cart = new Cart();

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product_Key) {
        $cart->add($products[$product_Key]);
    }
}



$cart->add($products[$_GET['product']]);

$_SESSION['cart'][] = $_GET['product'];
dump($_SESSION['cart'], $cart);