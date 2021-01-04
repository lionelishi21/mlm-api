<?php

use Illuminate\Database\Seeder;
use App\Affiliate;

class SingleAffiliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           Affiliate::create( [
			'parent_id'=>NULL,
			'user_id'=>1,
			'affiliate_id'=>'1000-MJKQ-1EF00',
			'created_at'=>NULL,
			'updated_at'=>'2020-07-20 11:51:25'
		] );

    }
}
