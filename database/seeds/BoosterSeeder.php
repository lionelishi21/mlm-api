<?php

use Illuminate\Database\Seeder;
use App\Booster;

class BoosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booster::create( [
		
			'parent_id'=> NULL,
			'user_id'=> 2,
			'created_at'=> NULL,
			'updated_at'=>'2020-07-20 11:51:25'
		
		] );
    }
}
