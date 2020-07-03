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
        $this->call(CountriesSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(CitiesSeeder::class);
//        $this->call(RolesSeeder::class);
    }
}
