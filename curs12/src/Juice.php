<?php

namespace Ilbah\Shop;

class Juice extends Product
{
    private int $volume;

    public function __construct(int $id, int $volume, string $name, float $price, Category $category)
    {
        $this->volume = $volume;
        parent::__construct($id, $name, $price, $category); //aceasta cheie se refera la clasa Product.
    }

//    public function tax(): float
//    {
//        return $this->price * 1.09;
//    }

}