<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankAccountSeeder extends Seeder
{
    public function run(): void
    {
        $bankAccounts = [
            ['bank_name' => 'BCA', 'account_number' => $this->generateAccountNumber('BCA')],
            ['bank_name' => 'BRI', 'account_number' => $this->generateAccountNumber('BRI')],
            ['bank_name' => 'BNI', 'account_number' => $this->generateAccountNumber('BNI')],
            ['bank_name' => 'BSI', 'account_number' => $this->generateAccountNumber('BSI')],
            ['bank_name' => 'Mandiri', 'account_number' => $this->generateAccountNumber('Mandiri')],
        ];

        foreach ($bankAccounts as &$account) {
            $account['account_holder'] = 'PT. IZUMI SUTORU';
            $account['created_at'] = now();
            $account['updated_at'] = now();
        }

        DB::table('bank_accounts')->insert($bankAccounts);
    }

    private function generateAccountNumber($bank)
    {
        $lengths = [
            'BCA' => 10,
            'BRI' => 15,
            'BNI' => 10,
            'BSI' => 10,
            'Mandiri' => 13,
        ];

        return str_pad(mt_rand(1, pow(10, $lengths[$bank]) - 1), $lengths[$bank], '0', STR_PAD_LEFT);
    }
}
