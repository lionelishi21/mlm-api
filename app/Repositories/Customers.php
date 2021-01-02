<?php 
namespace App\Repositories;
use App\Repositories\Stripe;
use App\User;
use App\Customer;



class Customers extends Stripe {

	public $customer;
	public $user;


	public function __construct() {
		$this->customer = new Customer;
		$this->user = new User;
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

	/**
	 * this function get customer by user the userid
	 * @param  [type] $userId [description]
	 * @return [type]         [desciption]
	 */
	public function getUserCustomer($userId) {

		$customer = $this->customer->where('user_id', '=', $userId)->first();
		if ( isset( $customer ) ) {
			return $customer;
		}
		return false;
	}

	/**
	 * this function store user customers
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function storeUserCustomer($userId) {

		$user = $this->user->where('id', '=', $userId)->first();
		$stripeCustomer = $this->saveStripeCustomer($user->name, $user->email);

		$customer = new Customer;
		$customer->user_id = $userId;
		$customer->customer_id = $stripeCustomer->id;
		$customer->save();

		if ($customer->save()) {
			return true;
		}

		return false;
	}






	public function getAllCustomers() {}

	public function getUserAsCustomer($user){} 

	public function storeCustomer($userid) {}








}

 ?>