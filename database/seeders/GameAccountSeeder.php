<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameAccountSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => '11223344',
                'server_id' => '5566',
                'nickname' => 'Rey Izumii',
            ],
            [
                'user_id' => '22334455',
                'server_id' => '6677',
                'nickname' => 'GamerX99',
            ],
            [
                'user_id' => '33445566',
                'server_id' => '7788',
                'nickname' => 'ShadowWarrior',
            ],
            [
                'user_id' => '44556677',
                'server_id' => '8899',
                'nickname' => 'NightHunter',
            ],
            [
                'user_id' => '55667788',
                'server_id' => '9900',
                'nickname' => 'DragonSlayer',
            ],
            [
                'user_id' => '126384759',
                'server_id' => '7532',
                'nickname' => 'PixelPhantom',
            ],
            [
                'user_id' => '984512376',
                'server_id' => '2934',
                'nickname' => 'CyberKnight',
            ],
            [
                'user_id' => '834756129',
                'server_id' => '4951',
                'nickname' => 'NeoHacker',
            ],
            [
                'user_id' => '598723401',
                'server_id' => '8450',
                'nickname' => 'ByteMage',
            ],
            [
                'user_id' => '472690183',
                'server_id' => '6842',
                'nickname' => 'DataVortex',
            ],
        ];

        foreach ($data as $account) {
            DB::table('game_accounts')->updateOrInsert(
                ['user_id' => $account['user_id'], 'server_id' => $account['server_id']], // Kondisi unik
                ['nickname' => $account['nickname']] // Data yang ingin disimpan
            );
        }
    }
}
