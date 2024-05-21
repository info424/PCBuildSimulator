<?php

namespace Ilbah\Shop;

trait TaxableTrait
{
    public function tax():float
    {
        return $this->price * 1.09;
    }
}