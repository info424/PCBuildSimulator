<?php

trait PriceUtilities {
    public float $price;

    public function getPrice(): float{
        return $this->price;
    }
    public function tax(): float{
        return $this->price * 1.19;
    }
}

interface Taxable{
    public function tax(): float;
}
class Product implements Taxable{
    use PriceUtilities;
}

$p = new Product();
$p->price = 5.2;
echo $p->getPrice();
echo '<br>';
echo $p->tax();

