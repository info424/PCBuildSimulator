<?php

namespace Ilbah\Shop;

class Shop
{
public static array $products = [];


public static function init(){

    $category = new Category('Sweets'); //Alt + Enter pe numele clasei si poti alege sa simplifice
    $cola = new Juice(1, 1, 'Coca-Cola', 7.5, $category);
    $fanta = new Juice(2, 1, 'Fanta', 7.5, $category);
    $milka = new Chocolate(3, 90, 'Milka Caramel', 6.4, $category);
    $africana = new Chocolate(4, 95, 'Africana Coconut', 3.7, $category);

    self::$products = [
        $cola->getId() => $cola,
        $fanta->getId() => $fanta,
        $milka->getId() => $milka,
        $africana->getId() => $africana,
    ];
}
}