<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('users')->truncate();
        DB::table('users')->insert([
        	'id' => 1,
            'first_name' => 'Majestic Cares',
            'last_name' => 'Community',
            'role_id' => 1,
            'email' => 'admin@majesticares.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('user_details')->truncate();
        DB::table('user_details')->insert([
        	'user_id' => 1,
        	'address1' => 'Majestice Care Community',
        ]);

        DB::table('affiliates')->truncate();
        DB::table('affiliates')->insert([
        	'user_id' => 1,
        	'affiliate_id' => 100100100,
        	'group_id' => 1
        ]);
    }
}
