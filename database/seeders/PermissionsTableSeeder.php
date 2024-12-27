<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            ['role_id' => 1, 'permission' => 'dashboard.total_customer_widget'],
            ['role_id' => 1, 'permission' => 'dashboard.deposit_requests_widget'],
            ['role_id' => 1, 'permission' => 'dashboard.withdraw_requests_widget'],
            ['role_id' => 1, 'permission' => 'dashboard.loan_requests_widget'],
            ['role_id' => 1, 'permission' => 'dashboard.expense_overview_widget'],
            ['role_id' => 1, 'permission' => 'dashboard.deposit_withdraw_analytics'],
            ['role_id' => 1, 'permission' => 'dashboard.recent_transaction_widget'],
            ['role_id' => 1, 'permission' => 'dashboard.due_loan_list'],
            ['role_id' => 1, 'permission' => 'members.pending_requests'],
            ['role_id' => 1, 'permission' => 'members.send_email'],
            ['role_id' => 1, 'permission' => 'members.send_sms'],
            ['role_id' => 1, 'permission' => 'members.index'],
            ['role_id' => 1, 'permission' => 'members.create'],
            ['role_id' => 1, 'permission' => 'members.show'],
            ['role_id' => 1, 'permission' => 'members.edit'],
            ['role_id' => 1, 'permission' => 'member_documents.index'],
            ['role_id' => 1, 'permission' => 'member_documents.create'],
            ['role_id' => 1, 'permission' => 'member_documents.edit'],
            ['role_id' => 1, 'permission' => 'member_documents.destroy'],
            ['role_id' => 1, 'permission' => 'loans.index'],
            ['role_id' => 1, 'permission' => 'loans.create'],
            ['role_id' => 1, 'permission' => 'loans.show'],
        ]);
    }
}
