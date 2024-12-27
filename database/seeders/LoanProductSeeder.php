<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loan_products')->insert([
            "name" => "Individual Loan",
            "loan_id_prefix" => "Test",
            "starting_loan_id" => "180000",
            "minimum_amount" => "10",
            "maximum_amount" => "100000",
            "interest_rate" => "10",
            "interest_type" => "flat_rate",
            "term" => "12",
            "term_period" => "+1 month",
            "late_payment_penalties" => "0",
            "status" => "1",
            "description" => null
        ]);
    }
}
