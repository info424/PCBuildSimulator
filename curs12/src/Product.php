<?php

namespace Ilbah\Shop;

abstract class Product implements Taxable
{
    protected int $id;

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

    public function getId(): int {
        return $this->id;
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