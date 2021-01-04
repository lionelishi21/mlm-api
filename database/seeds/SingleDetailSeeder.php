<?php

use Illuminate\Database\Seeder;
use App\UserDetail;

class SingleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDetail::create( [
			'id'=>1,
			'user_id'=>1,
			'address1'=>'Majestice Care Community',
			'address2'=>NULL,
			'city'=>NULL,
			'country'=>NULL,
			'state'=>NULL,
			'postal_code'=>NULL,
			'created_at'=>NULL,
			'updated_at'=>NULL
		] );
    }
}
