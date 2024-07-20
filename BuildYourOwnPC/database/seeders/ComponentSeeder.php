<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;

class ComponentSeeder extends Seeder
{
    public function run()
    {
        $components = [
            ['name' => 'Intel Core i9', 'type' => 'CPU', 'price' => 500],
            ['name' => 'AMD Ryzen 9', 'type' => 'CPU', 'price' => 450],
            ['name' => 'NVIDIA RTX 3080', 'type' => 'GPU', 'price' => 700],
            ['name' => 'AMD Radeon RX 6800', 'type' => 'GPU', 'price' => 650],
            ['name' => 'ASUS ROG Motherboard', 'type' => 'Motherboard', 'price' => 200],
            ['name' => 'MSI MPG Motherboard', 'type' => 'Motherboard', 'price' => 180],
            ['name' => 'Corsair Vengeance 16GB RAM', 'type' => 'RAM', 'price' => 100],
            ['name' => 'G.Skill Trident Z 32GB RAM', 'type' => 'RAM', 'price' => 150],
            ['name' => 'Samsung 1TB SSD', 'type' => 'Storage', 'price' => 150],
            ['name' => 'WD 2TB HDD', 'type' => 'Storage', 'price' => 80],
            ['name' => 'Corsair 750W PSU', 'type' => 'Power Supply', 'price' => 120],
            ['name' => 'EVGA 650W PSU', 'type' => 'Power Supply', 'price' => 100],
            ['name' => 'Cooler Master Liquid Cooling', 'type' => 'Cooling System', 'price' => 140],
            ['name' => 'Noctua Air Cooling', 'type' => 'Cooling System', 'price' => 90],
        ];

        foreach ($components as $component) {
            Component::create($component);
        }
    }
}
