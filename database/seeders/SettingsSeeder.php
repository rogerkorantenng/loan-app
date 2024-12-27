<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'name' => 'mail_type',
                'value' => 'smtp'
            ],
            [
                'name' => 'backend_direction',
                'value' => 'ltr'
            ],
            [
                'name' => 'language',
                'value' => 'English'
            ],
            [
                'name' => 'email_verification',
                'value' => 'disabled'
            ],
            [
                'name' => 'allow_singup',
                'value' => 'yes'
            ],
            [
                'name' => 'starting_member_no',
                'value' => '20241000'
            ],
            [
                'name' => 'company_name',
                'value' => 'Crazy Market'
            ],
            [
                'name' => 'site_title',
                'value' => 'Crazy Market'
            ],
            [
                'name' => 'phone',
                'value' => '0547738808'
            ],
            [
                'name' => 'email',
                'value' => 'support@crazymarket.store'
            ],
            [
                'name' => 'timezone',
                'value' => 'Africa/Accra'
            ],

        ]);

    }
}
