<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sort;

class SortSeeder extends Seeder
{
    
    public function run()
    {
        sort::create([
            'name' => 'Toast',
            'type' => 'burger',
            'order' => 12
        ]
        );
        sort::create([
            'name' => 'Toast Cheese',
            'type' => 'burger',
            'order' => 14
        ]
        );
        sort::create([
            'name' => 'Toast Bacon',
            'type' => 'burger',
            'order' => 16
        ]
        );
        sort::create([
            'name' => 'Pepsi',
            'type' => 'drink',
            'order' => 1
        ]
        );
        sort::create([
            'name' => 'Cola',
            'type' => 'drink',
            'order' => 2
        ]
        );
        sort::create([
            'name' => 'Fanta',
            'type' => 'drink',
            'order' => 3
        ]
        );
        sort::create([
            'name' => '7up',
            'type' => 'drink',
            'order' => 7
        ]
        );
        sort::create([
            'name' => 'Natakhtar',
            'type' => 'drink',
            'order' => 5
        ]
        );
        sort::create([
            'name' => 'Toast Bacon + Cheese',
            'type' => 'burger',
            'order' => 18
        ]
        );
        sort::create([
            'name' => 'Toast Bacon + Potato',
            'type' => 'burger',
            'order' => 22
        ]
        );
    }
}
