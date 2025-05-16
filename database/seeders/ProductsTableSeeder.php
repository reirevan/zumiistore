<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Product::create([
        'name' => 'Diamond Mobile Legends',
        'description' => 'Top-up Diamond MLBB cepat & murah.',
        'price' => 15000,
        'stock' => 1000,
        'image' => 'diamonds.jpg',
    ]);
}

}
