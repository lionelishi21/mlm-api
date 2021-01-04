<?php

use Illuminate\Database\Seeder;
use App\User;

class SingleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->truncate();
        User::create( [
        'id'=>1,
        'first_name'=>'Majestic',
        'last_name'=>'Cares',
        'company'=>'Majestic Cares INTL LLC',
        'username'=>NULL,
        'phone_number'=>NULL,
        'role_id'=>'1',
        'email'=>'admin@majesticares.com',
        'email_verified_at'=>NULL,
        'password'=> bcrypt('password'),
        'remember_token'=>NULL,
        'created_at'=>NULL,
        'updated_at'=>'2020-07-07 20:13:55'
        ]);

    }
}
