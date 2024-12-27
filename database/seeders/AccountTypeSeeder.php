<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('savings_products')->insert([
            'name' => 'Individual',
            'account_number_prefix' => 'Account',
            'starting_account_number' => '190000',
            'currency_id' => 4,
            'interest_rate' => '10',
            'interest_period' => 1,
            'interest_method' => 'daily_outstanding_balance',
            'min_bal_interest_rate' => 10,
            'allow_withdraw' => 1,
            'minimum_deposit_amount' => '100',
            'minimum_account_balance' => '50',
            'maintenance_fee' => '0',
            'maintenance_fee_posting_period' => 1,
            'status'=> 1
        ]);
    }
}
