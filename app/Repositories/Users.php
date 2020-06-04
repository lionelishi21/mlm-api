<?php 
namespace  App\Repositories;
use App\User;
// use App\UserDetail;

class Users {

	protected $user;
	protected $details; 

	public function __construct() {
		$this->model = new User;
		// $this->details = new UserDetail;
	}

	/**
	 * Get user details 
	 * @param  [type] $user_id [description]
	 * @return [type]          [description]
	 */
	public function getUserDetailsById( $user_id ) {
		
		$user = $this->model->with(['detail', 'affiliate', 'purchase'])->where('id', '=', $user_id)->first();
		if (isset( $user )) {
			return $user;
		}			
	}
}


 ?>