<?php

namespace Bazar\Aprozar;

class Category
{
    private string $name;
    private string $type;

    const VALUES = [
        'exotic',
        'foreign',
        'country',
        'seasonal',
    ];

    const TYPES = [
        'Vegetables',
        'Fruits',
    ];
    public function __construct(string $name, string $type)
    {
        if (! is_string($name)) {
            throw new \Exception('Name of category must be string');
        }

        if (! in_array($name, self::VALUES)) {
            throw new \Exception('Name of category must be one of ' . implode(', ', self::VALUES));
        }

        if (! in_array($type, self::TYPES)) {
            throw new \Exception('Name of category must be one of ' . implode(', ', self::TYPES));
        }

        $this->name = $name;
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(){
        return $this->name;
    }
}