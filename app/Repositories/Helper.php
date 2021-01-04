<?php 
namespace App\Repositories;


class Helper {

	/**
	 * [percentageOf description]
	 * @param  [type]  $number     [description]
	 * @param  [type]  $everything [description]
	 * @param  integer $decimals   [description]
	 * @return [type]              [description]
	 */
	public function percentageOf( $number, $everything, $decimals = 2 ){
         return round( $number / $everything * 100, $decimals );
    }


}


 ?>