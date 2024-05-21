<?php

namespace Ilbah\Shop;

abstract class Product implements Taxable
{
    use ProductIdentifierTrait, TaxableTrait;

    protected string $name;

    protected float $price;

    protected Category $category;

    public function __construct(int $id, string $name, float $price, Category $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }


    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getCategory(): Category {
        return $this->category;
    }

}