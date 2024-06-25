<?php

namespace Bazar\Aprozar;

use DateTime;

class Fruit
{
    protected string $name;

    protected Category $category;

    protected DateTime $expiresAt;

    protected float $price;

    public function __construct(string $name, Category $category, DateTime $expiresAt, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->expiresAt = $expiresAt;
        $this->price = $price;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getExpiresAt(): DateTime
    {
        return $this->expiresAt;
    }

    public function getPrice(): float // int = numar intreg, float = cu 2 zecimale
    {
        return $this->price;
    }
}