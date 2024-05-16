<?php

namespace Ilbah\Shop;

interface Taxable
{
    public function tax(): float;
}