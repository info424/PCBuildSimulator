<?php

namespace Bazar\Aprozar;

use DateTime;

class Fruit
{
    private string $name;

    private Category $category;

    private DateTime $expiresAt;

    private float $price;

    public function __construct(string $name, Category $category, DateTime $expiresAt, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->expiresAt = $expiresAt;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCategory(): Category {
        return $this->category;
    }

    public function getExpiresAt(): DateTime {
        return $this->expiresAt;
    }
    public function getPrice(): float {
        return $this->price;
    }
}