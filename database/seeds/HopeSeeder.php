<?php

use Illuminate\Database\Seeder;
use App\Rayofhope;

class HopeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Rayofhope::create( [
			'parent_id'=>NULL,
			'user_id'=>1,
			'created_at'=>NULL,
			'updated_at'=>'2020-07-20 11:51:25'
		] );
    }
}
