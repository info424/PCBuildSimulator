<?php

namespace Ilbah\Shop;

trait ProductIdentifierTrait
{
    protected int $id;

    public function getId(): int {
        return $this->id;
    }
}