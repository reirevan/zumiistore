<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    $product = \App\Models\Product::first(); // Ambil produk pertama

    if ($product) {
        \App\Models\ProductVariation::insert([
            [
                'product_id' => $product->id,
                'variation_name' => '86 Diamonds',
                'price' => 15000,
            ],
            [
                'product_id' => $product->id,
                'variation_name' => '172 Diamonds',
                'price' => 30000,
            ],
        ]);
    }
    }

}
