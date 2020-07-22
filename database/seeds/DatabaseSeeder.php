<?php

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
        $this->call(UserTableSeeder::class);
        $this->call(GatewaySeeder::class);
        $this->call(UserDetailsSeeder::class);
        $this->call(AffiliateSeeder::class);
        $this->call(PurchaseSeeder::class);
       
//        $this->call(RolesSeeder::class);
    }
}
