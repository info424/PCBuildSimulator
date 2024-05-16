<?php

namespace Ilbah\Shop;

class Chocolate extends Product
{
    private int $size;

    public function __construct(int $id, int $size, string $name, float $price, Category $category)
    {
        $this->size = $size;
        parent::__construct($id, $name, $price, $category); //aceasta cheie se refera la clasa Product.
    }

    public function tax(): float
    {
        return $this->price * 1.19;
    }


}