<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
        'name' => 'product',
        'slug' => 'product',
        ]);
        Menu::create([
        'name' => 'service',
        'slug' => 'service',
        ]);
        Menu::create([
        'name' => 'features',
        'slug' => 'features',
        ]);
        Menu::create([
        'name' => 'promo',
        'slug' => 'promo',
        ]);
        Menu::create([
            'name' => 'location',
            'slug' => 'location',
            ]);
        Menu::create([
            'name' => 'blog',
            'slug' => 'blog',
            ]);
        
    }
}
