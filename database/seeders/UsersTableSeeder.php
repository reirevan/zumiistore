<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
        public function run(): void
    {
        echo "Seeding dimulai...\n";

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->delete();
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        echo "Data users dihapus...\n";

        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'adminzumii', 
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'created_at' => now(),  
            'updated_at' => now(),  
        ]);        
        
        echo "Data user berhasil dimasukkan!\n";
    }

}
