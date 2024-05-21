<?php

namespace Ilbah\Shop;

class Cart
{
    private array $items = [];

    public function add(Product $product)
    {
        $this->items[] = $product;
    }

    public function getItems(): array{
        return $this->items;
    }
}