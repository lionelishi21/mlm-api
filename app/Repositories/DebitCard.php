<?php 
namespace App\Repositories;

use App\Repositories\Stripe;
use App\Customer;
use App\User;

class DebitCard extends Stripe {


	public function __construct() {

	}

	/**
	 * [connectDebitCard description]
	 * @param  [type] $attributes [description]
	 * @param  [type] $userId     [description]
	 * @return [type]             [description]
	 */
	public function connectDebitCard($attributes, $userId) {

		$account = $this->getCustomerAccount($userId);
	
		if ( $account ) {
			$account = $this->getAccountId($userId);
	        $token = $this->getDebitCardToken($attributes);
	   
	        if (!$token) {
	        	return $token;
	        }

			$card = $this->createExternalCard($account, $token->id);
			
			return [
				'msg' => 'Debit card was successfully added',
				'status' => $card
			];

		} else {
			
			$email = User::find($userId)->email;
			$account = $this->createStripeAccount($email);
			$customer = $this->createCustomer($userId);

			$create_account = $this->createAccount($userId, $account->id);
			$token = $this->getDebitCardToken($attributes);


	        if (!$token) {
	        	return $token;
	        }

			$this->createExternalCard($account->id, $token->id);

			$accountLink = $this->generateAccountLink($account->id);

			return [
				'linl' => $accountLink
			];
		}
	}

	/**
	 * [createAccount description]
	 * @param  [type] $userId    [description]
	 * @param  [type] $accountId [description]
	 * @return [type]            [description]
	 */
	public function createAccount($userId, $accountId) {

		$customer = Customer::where('user_id', '=', $userId)->first();
		$customer->account_id =$accountId;
		$customer->save();

		if ( $customer->save()) {
			return true;
		}

		return false;
	}

	/**
	 * [getCustomer description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getCustomer($userId) {

		$customer = Customer::where('user_id', '=', $userId)->first();
		if ( isset($customer) ) {
			return true;
		}
		return false;
	}

	/**
	 * [createCustomer description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function createCustomer($userId) {

		if ( !$this->getCustomer($userId) ) {

			$user = User::find($userId);
			$customer_id = $this->saveStripeCustomer($user->name, $user->email)->id;

			$customer = new Customer;
			$customer->user_id = $userId;
			$customer->customer_id = $customer_id;
			$customer->save();
		}
	}


	/**
	 * this function check for customer account id
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getCustomerAccount( $userId ) {

		$account = Customer::where('user_id', '=', $userId)->first();
		if ( isset($account->account_id) ){
			return true;
		}
		return false;
	}

	/**
	 * [getAccountId description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getAccountId($userId) {
		return $account = Customer::where('user_id', '=', $userId)->first()->account_id;
	}

	/**
	 * [getDebitCardToken description]
	 * @param  array  $attributes [description]
	 * @return [type]             [description]
	 */
	public function getDebitCardToken(array $attributes) {
		return $this->generateCardToken($attributes);
	}



}

 ?>