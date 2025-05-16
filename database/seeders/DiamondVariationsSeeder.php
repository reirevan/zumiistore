<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiamondVariationsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Weekly Pass
            ['nominal' => 1, 'bonus' => 0, 'total' => 1, 'price' => 27000, 'type' => 'weekly'],
            ['nominal' => 2, 'bonus' => 0, 'total' => 2, 'price' => 54000, 'type' => 'weekly'],
            ['nominal' => 3, 'bonus' => 0, 'total' => 3, 'price' => 81000, 'type' => 'weekly'],
            ['nominal' => 4, 'bonus' => 0, 'total' => 4, 'price' => 108000, 'type' => 'weekly'],
            ['nominal' => 5, 'bonus' => 0, 'total' => 5, 'price' => 135000, 'type' => 'weekly'],
            ['nominal' => 10, 'bonus' => 0, 'total' => 10, 'price' => 270000, 'type' => 'weekly'],

            // Diamonds
            ['nominal' => 14, 'bonus' => 0, 'total' => 14, 'price' => 3000, 'type' => 'diamond'],
            ['nominal' => 28, 'bonus' => 0, 'total' => 28, 'price' => 7000, 'type' => 'diamond'],
            ['nominal' => 86, 'bonus' => 8, 'total' => 86, 'price' => 22000, 'type' => 'diamond'],
            ['nominal' => 140, 'bonus' => 13, 'total' => 140, 'price' => 26000, 'type' => 'diamond'],
            ['nominal' => 172, 'bonus' => 16, 'total' => 172, 'price' => 42000, 'type' => 'diamond'],
            ['nominal' => 257, 'bonus' => 23, 'total' => 257, 'price' => 62000, 'type' => 'diamond'],
            ['nominal' => 284, 'bonus' => 30, 'total' => 284, 'price' => 70000, 'type' => 'diamond'],
            ['nominal' => 344, 'bonus' => 32, 'total' => 344, 'price' => 84000, 'type' => 'diamond'],
            ['nominal' => 355, 'bonus' => 38, 'total' => 355, 'price' => 88000, 'type' => 'diamond'],
            ['nominal' => 429, 'bonus' => 39, 'total' => 429, 'price' => 106000, 'type' => 'diamond'],
            ['nominal' => 514, 'bonus' => 46, 'total' => 514, 'price' => 128000, 'type' => 'diamond'],
            ['nominal' => 706, 'bonus' => 81, 'total' => 706, 'price' => 165000, 'type' => 'diamond'],
            ['nominal' => 878, 'bonus' => 97, 'total' => 878, 'price' => 208000, 'type' => 'diamond'],
            ['nominal' => 963, 'bonus' => 104, 'total' => 963, 'price' => 230000, 'type' => 'diamond'],
            ['nominal' => 1412, 'bonus' => 0, 'total' => 1412, 'price' => 328000, 'type' => 'diamond'],
            ['nominal' => 2195, 'bonus' => 0, 'total' => 2195, 'price' => 495000, 'type' => 'diamond'],
            ['nominal' => 2901, 'bonus' => 0, 'total' => 2901, 'price' => 650000, 'type' => 'diamond'],
            ['nominal' => 3688, 'bonus' => 0, 'total' => 3688, 'price' => 810000, 'type' => 'diamond'],
            ['nominal' => 5532, 'bonus' => 0, 'total' => 5532, 'price' => 1230000, 'type' => 'diamond'],
            ['nominal' => 6238, 'bonus' => 0, 'total' => 6238, 'price' => 1390000, 'type' => 'diamond'],
            ['nominal' => 7727, 'bonus' => 0, 'total' => 7727, 'price' => 1700000, 'type' => 'diamond'],
            ['nominal' => 9288, 'bonus' => 0, 'total' => 9288, 'price' => 2010000, 'type' => 'diamond'],
            ['nominal' => 12976, 'bonus' => 0, 'total' => 12976, 'price' => 2800000, 'type' => 'diamond'],
            ['nominal' => 18576, 'bonus' => 0, 'total' => 18576, 'price' => 3975000, 'type' => 'diamond'],
        ];

        DB::table('diamond_variations')->insert($data);
    }
}
