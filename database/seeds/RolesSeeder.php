<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        DB::table('roles')->insert([
        	'id' => 1,
        	'name' => 'admin',
        ]);
        DB::table('roles')->insert([
        	'id' => 1,
        	'name' => 'user'
        ])
    }
}
