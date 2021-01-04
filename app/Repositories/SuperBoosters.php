<?php 
namespace App\Repositories;

use App\SuperBooster;


class SuperBoosters {

	protected $model;

	/**
	 * **************************************************************
	 * constructor description
	 * **************************************************************
	 */
	public function __construct() {
		$this->model = new SuperBooster;
	}

	/**
	 * *************************************************************
	 * THIS FUNCTION CREATE SUPER BOOSTERS PACKAGES
	 * *************************************************************
	 * @param  [integer] $user_id   User auto increment id
	 * @param  [type] $qty      user count
	 * @param  [type] $sys      boolean
	 * @return boolean         
	 */
	public function createBooster($user_id, $qty, $sys) {
		
		$super = new SuperBooster;
		$super->user_id = $user_id;
		$super->is_system = $sys;
		$super->save();

		if ( $super->save() ) {
			return true;
		}

		return false;
	}


	

}


 ?>