<?php

namespace Bazar\Aprozar;

class Category
{
    private string $name;
    private string $type;

    const VEGETABLES = [
        'Root',
        'Leafy green',
        'Cruciferous',
        'Allium',
    ];

    const FRUITS = [
        'Citrus',
        'Exotic',
        'Berries',
        'Stone fruits',
    ];

    const TYPES = [
        'Vegetables',
        'Fruits',
    ];
        public function __construct(string $name, string $type)
    {
        if (!is_string($name)) {
            throw new \Exception('Name of category must be string');
        }

        if (!in_array($type, self::TYPES)) {
            throw new \Exception('Type of category must be one of ' . implode(', ', self::TYPES));
        }

        $validValues = ($type === 'Vegetables') ? self::VEGETABLES : self::FRUITS;

        if (!in_array($name, $validValues)) {
            throw new \Exception('Name of category must be one of ' . implode(', ', $validValues));
        }

        $this->name = $name;
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
    public function getName(): string
    {
        return $this->name;
    }

}