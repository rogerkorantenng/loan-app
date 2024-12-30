<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UtilitySeeder::class,
            EmailSMSTemplateSeeder::class,
            CurrencySeeder::class,
            UserSeeder::class,
            SettingsSeeder::class,
            PaymentGatewaysSeeder::class,
            PermissionsTableSeeder::class,
            BranchSeeder::class,
            LoanProductSeeder::class,
            AccountTypeSeeder::class,
            AgentSeeder::class
        ]);

    }
}
