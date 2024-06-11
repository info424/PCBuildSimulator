<?php

namespace Bazar\Aprozar;

class Category
{
    private string $name;

    const VALUES = [
        'exotic',
        'foreign',
        'country',
    ];
    public function __construct(string $name)
    {
        if (! is_string($name)) {
            throw new \Exception('Name of category must be string');
        }

        if (! in_array($name, self::VALUES)) {
            throw new \Exception('Name of category must be one of ' . implode(', ', self::VALUES));
        }
        $this->name = $name;
    }

}