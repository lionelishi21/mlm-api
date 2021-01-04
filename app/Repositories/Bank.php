<?php 
namespace App\Repositories;
use App\Repositories\Customers;
use App\Repositories\Accounts;
use App\Repositories\Stripe;




class Bank extends Stripe {

	public $customer;
	public $account;

	public function __construct() {
		$this->customer = new Customers;
		$this->account = new Accounts;
	}	

	/**
	 * [store description]
	 * @param  array  $attributes [description]
	 * @param  [type] $userId     [description]
	 * @return [type]             [description]
	 */
	public function store(array $attributes, $userId) {

		$account = $this->connectBankAccount($userId);
		$token = $this->account->generateToken($attributes);
		$bank = $this->account->connectExternalAccount($userId, $token);
		$accountLink = $this->account->accountLink($userId);

		return [
			'link' => $accountLink,
			'bank' => $bank,
			'account' => $account
		];
	}

	/**
	 * [connectBankAccount description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function connectBankAccount($userId) {
		
		$customer = $this->customer->getUserCustomer($userId);
		if ( $customer ) {
			// create account
			return $this->account->createAccount($userId);

		} else {
			//create customer
			$customer = $this->customer->storeUserCustomer($userId);
			return $this->account->createAccount($userId);
		}
	}
}



 ?>