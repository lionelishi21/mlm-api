<?php 
namespace App\Repositories;
use App\Customer;


class Customers {

	protected $customer;

	public function __construct() {
		$this->customer = new Customer;
	}

	/**
	 * [getCustomerByUserId description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getCustomerByUserId($userId) {

		$customers = $this->customer->with('gateway')->where('user_id', '=', $userId)->get();
		$response = array();
		return $customers;
	}


	public function retriveStripeCustomerInformation() {

	}


	public function retriveBankAccount() {

	}


}

 ?>