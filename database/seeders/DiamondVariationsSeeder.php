<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiamondVariationsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nominal' => 14, 'bonus' => 0, 'total' => 14, 'price' => 3000],
            ['nominal' => 28, 'bonus' => 0, 'total' => 28, 'price' => 7000],
            ['nominal' => 86, 'bonus' => 8, 'total' => 86, 'price' => 22000],
            ['nominal' => 140, 'bonus' => 13, 'total' => 140, 'price' => 26000],
            ['nominal' => 172, 'bonus' => 16, 'total' => 172, 'price' => 42000],
            ['nominal' => 257, 'bonus' => 23, 'total' => 257, 'price' => 62000],
            ['nominal' => 284, 'bonus' => 30, 'total' => 284, 'price' => 70000],
            ['nominal' => 344, 'bonus' => 32, 'total' => 344, 'price' => 84000],
            ['nominal' => 355, 'bonus' => 38, 'total' => 355, 'price' => 88000],
            ['nominal' => 429, 'bonus' => 39, 'total' => 429, 'price' => 106000],
            ['nominal' => 514, 'bonus' => 46, 'total' => 514, 'price' => 128000],
            ['nominal' => 706, 'bonus' => 81, 'total' => 706, 'price' => 165000],
            ['nominal' => 878, 'bonus' => 97, 'total' => 878, 'price' => 208000],
            ['nominal' => 963, 'bonus' => 104, 'total' => 963, 'price' => 230000],
            ['nominal' => 1412, 'bonus' => 0, 'total' => 1412, 'price' => 328000],
            ['nominal' => 2195, 'bonus' => 0, 'total' => 2195, 'price' => 495000],
            ['nominal' => 2901, 'bonus' => 0, 'total' => 2901, 'price' => 650000],
            ['nominal' => 3688, 'bonus' => 0, 'total' => 3688, 'price' => 810000],
            ['nominal' => 5532, 'bonus' => 0, 'total' => 5532, 'price' => 1230000],
            ['nominal' => 6238, 'bonus' => 0, 'total' => 6238, 'price' => 1390000],
            ['nominal' => 7727, 'bonus' => 0, 'total' => 7727, 'price' => 1700000],
            ['nominal' => 9288, 'bonus' => 0, 'total' => 9288, 'price' => 2010000],
            ['nominal' => 12976, 'bonus' => 0, 'total' => 12976, 'price' => 2800000],
            ['nominal' => 18576, 'bonus' => 0, 'total' => 18576, 'price' => 3975000],
            ['nominal' => 0, 'bonus' => 0, 'total' => 0, 'price' => 27000], // Weekly Pass
        ];

        DB::table('diamond_variations')->insert($data);
    }
}

