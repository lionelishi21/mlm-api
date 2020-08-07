<?php

use Illuminate\Database\Seeder;

class GatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gateways')->truncate();
        DB::table('gateways')->insert([
            'name' => 'Paypal'
        ]);
        DB::table('gateways')->insert([
            'name' => 'Payoneer'
        ]);
          DB::table('gateways')->insert([
            'name' => 'Stripe'
        ]);
        DB::table('gateways')->insert([
            'name' => 'Uphold'
        ]);
       
    }
}
