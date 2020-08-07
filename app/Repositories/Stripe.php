<?php 
namespace App\Repositories;


class Stripe {

	public $stripe;

	public function __construct() {
	   $this->stripe = new \Stripe\StripeClient('sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ');
	}

	
	/**
	 * This function get stripe customer by passing customer id from the database
	 * @param  [type] $cusId [description]
	 * @return [type]        [description]
	 */
	public function getStripeCustomerById($cusId) {

		$stripe = new \Stripe\StripeClient('sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ');
		$customer = $stripe->customers->retrieve(
		  $cusId,
		  []
		);
		return $customer;
	}	

	/**
	 * this function store customer into stripe
	 * @param  [type] $name  [description]
	 * @param  [type] $email [description]
	 * @return [type]        [description]
	 */
	public function saveStripeCustomer($name, $email) {

	   // Create a Customer:
		$stripe = new \Stripe\StripeClient('sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ');
        $customer = $stripe->customers->create([
            'name' => $name,
            'email' => $email,
        ]);

       return $customer;
	}

	/**
	 * [createStripeAccount description]
	 * @param  [type] $email   [description]
	 * @param  string $country [description]
	 * @return [type]          [description]
	 */
	public function createStripeAccount($email, $country = 'us') {
		
		 $stripe = new \Stripe\StripeClient('sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ');
		 $account = $stripe->accounts->create([
			  'type' => 'custom',
			  'country' => $country,
			  'email' => $email,
			  'requested_capabilities' => [
			    'card_payments',
			    'transfers',
			  ],
	      ]);

		 return $account;
	}

	/**
	 * this function connect the external bank account
	 * @param  [type] $accountId [description]
	 * @param  [type] $bankId    [description]
	 * @return [type]            [description]
	 */
	public function connectExternalAccount($accountId,$bankId) {

		$external = $this->stripe->accounts->createExternalAccount(
		    $accountId,
		  [
		    'external_account' => $bankId,
		  ]
		);
	    return $external;
	}

	/**
	 * Theis function creates a token for the bank
	 * @param  array  $attributes [description]
	 * @return [type]             [description]
	 */
	public function generateBankToken(array $attributes) {

		$stripe = new \Stripe\StripeClient('sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ');
		$bank = $stripe->tokens->create([
		  'bank_account' => [
			  'country' => $attributes['country'],
			  'currency' => $attributes['currency'],
			  'account_holder_name' => $attributes['account_holder_name'],
			  'account_holder_type' => $attributes['account_holder_type'],
			  'routing_number' => $attributes['routing_number'],
			  'account_number' => $attributes['account_number']
		    ],
		]);

		return $bank;
	}

	/**
	 * [generateCardToken description]
	 * @param  array  $array [description]
	 * @return [type]        [description]
	 */
	public function generateCardToken(array $array){}

	/**
	 * [AddExternalAccount description]
	 * @param [type] $accountId [description]
	 * @param [type] $bankId    [description]
	 */
	public function AddExternalAccount($accountId, $bankId){

		$stripe = new \Stripe\StripeClient('sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ');
		$external = $stripe->accounts->createExternalAccount(
		    $accountId,
		  [
		    'external_account' => $bankId,
		  ]
		);

	    return $external;
	}


	public function getExternalAccount($accountId) {

		$stripe = new \Stripe\StripeClient('sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ');
		$userAccount = $stripe->accounts->retrieve(
			  $accountId,
			  []
		);

		if ( $userAccount) {
			return $userAccount['external_accounts']['data'];
		}
	} 


	public function generateAccountLink($accountId) {

		$stripe = new \Stripe\StripeClient(
		  'sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ'
		);

		$accountLink =  $stripe->accountLinks->create([
		  'account' => $accountId,
		  'refresh_url' => 'https://majesticares.com/dashboard/settings',
		  'return_url' => 'https://majesticares.com/dashboard/settings',
		  'type' => 'account_onboarding',
		]);

		return $accountLink->url;

	}

	// TODO:update external account
}

 ?>