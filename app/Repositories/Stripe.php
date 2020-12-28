<?php 
namespace App\Repositories;

use App\SupportedCountry;

class Stripe {

	public $stripe;
	public $stripeLive = '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';
	public $stripeTest = 'sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ';


	public function __construct() {
	   $this->stripe = new \Stripe\StripeClient($this->stripeLive);
	}

	/**
	 * [balance description]
	 * @return [type] [description]
	 */
	public function balance() {
		$stripe = new \Stripe\StripeClient($this->stripeLive);
        $balance = $stripe->balance->retrieve();
        return $balance;
	}

	
	/**
	 * This function get stripe customer by passing customer id from the database
	 * @param  [type] $cusId [description]
	 * @return [type]        [description]
	 */
	public function getStripeCustomerById($cusId) {

		$stripe = new \Stripe\StripeClient($this->stripeLive);
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
		$stripe = new \Stripe\StripeClient($this->stripeLive);
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

		
		$country = $this->isSupportedCountry($country);

		 $stripe = new \Stripe\StripeClient($this->stripeLive);
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


	public function isSupportedCountry($data) {

		 $supportedCountries = SupportedCountry::get();
			
		 $response = array();
		 foreach($supportedCountries as $country ) {
		 	array_push($response, $country->code);
		 }

		 if (in_array($data, $response)) {
		 	return $data;
		 } else {
		 	return 'US';
		 }
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


		if ($attributes['country'] == 'JM') {
			$attributes['country'] = 'US';
		}
	
		$stripe = new \Stripe\StripeClient($this->stripeLive);
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
	 * [AddExternalAccount description]
	 * @param [type] $accountId [description]
	 * @param [type] $bankId    [description]
	 */
	public function AddExternalAccount($accountId, $bankId){

		$stripe = new \Stripe\StripeClient($this->stripeLive);
		$external = $stripe->accounts->createExternalAccount(
		    $accountId,
		  [
		    'external_account' => $bankId,
		  ]
		);
	    return $external;
	}

	/**
	 * [getExternalAccount description]
	 * @param  [type] $accountId [description]
	 * @return [type]            [description]
	 */
	public function getExternalAccount($accountId) {

		$stripe = new \Stripe\StripeClient($this->stripeLive);
		$userAccount = $stripe->accounts->retrieve(
			  $accountId,
			  []
		);

		if ( $userAccount) {
			return $userAccount['external_accounts']['data'];
		}
	} 

	/**
	 * [generateAccountLink description]
	 * @param  [type] $accountId [description]
	 * @return [type]            [description]
	 */
	public function generateAccountLink($accountId) {

		$stripe = new \Stripe\StripeClient(
		  $this->stripeLive
		);

		$accountLink =  $stripe->accountLinks->create([
		  'account' => $accountId,
		  'refresh_url' => 'https://app.majesticares.com/dashboard/settings',
		  'return_url' => 'https://app.majesticares.com/dashboard/settings',
		  'type' => 'account_onboarding',
		]);

		return $accountLink->url;
	}

	public function generateUpdateAccountLink($accountId) {

		$stripe = new \Stripe\StripeClient(
		  $this->stripeLive
		);

		$accountLink =  $stripe->accountLinks->create([
		  'account' => $accountId,
		  'refresh_url' => 'https://app.majesticares.com/dashboard/settings',
		  'return_url' => 'https://app.majesticares.com/dashboard/settings',
		  'type' => 'account_update',
		]);

		return $accountLink->url;
	}


	/**
	 * [createExternalCard description]
	 * @param  [type] $acct  [description]
	 * @param  [type] $token [description]
	 * @return [type]        [description]
	 */
	public function createExternalCard($acct, $token) {
		$stripe = new \Stripe\StripeClient($this->stripeLive);
		
		$stripe->accounts->createExternalAccount(
		   $acct,
		  ['external_account' => $token]
		);
	}


	public function generateCardToken($attributes) {

		$stripe = new \Stripe\StripeClient($this->stripeLive);

		$token = $stripe->tokens->create([
			    'card' => [
			    'number' => $attributes['number'],
			    'exp_month' =>  $attributes['exp_month'],
			    'exp_year' => $attributes['exp_year'],
			    'cvc' => $attributes['cvc'],
			    'currency' => $attributes['currency']
			  ],	
		]);

		return $token;
	}

	// TODO:update external accoun

	public function getUserStripeAccount($accountId) {

		$stripe = new \Stripe\StripeClient($this->stripeLive);
		
		$account = $stripe->accounts->retrieve(
		  $accountId,
		  []
		);
		return $account;
	}

	/**
	 * [instantPayout description]
	 * @return [type] [description]
	 */
	public function instantPayout($amount, $accountId) {

		\Stripe\Stripe::setApiKey($this->stripeLive);
		 $payout = \Stripe\Payout::create([
		  'amount' => $amount,
		  'currency' => 'usd',
		  'method' => 'instant',
		], [
		  'stripe_account' => $accountId,
		]);
	}


	/**
	 * Get all customer accounts
	 * @return [type] [description]
	 */
	public function getAllAccounts() {

		$stripe = new \Stripe\StripeClient($this->stripeLive);
		$accounts = $stripe->accounts->all();
		return $accounts;
	}

	/**
	 * [deleteExternalAccountCard description]
	 * @param  [type] $accountId [description]
	 * @param  [type] $id        [description]
	 * @param  [type] $object    [description]
	 * @return [type]            [description]
	 */
	public function deleteExternalAccountCard($accountId, $id, $object) {

		$stripe = new \Stripe\StripeClient($this->stripeLive);

		if ($object == 'card') {
			$stripe->accounts->deleteExternalAccount(
		      $accountId,
		      $id,
			  []
			);
		}
		
	}

	/**
	 * ************************************************************************
	 * Get stripe transactions
	 * @return [type] [description]
	 * ************************************************************************
	 */
	public function balanceTransaction() {
		$stripe = new \Stripe\StripeClient($this->stripeLive);
        return $stripe->transfers->all();
	}


	/**
	 * [payout description]
	 * @param  [type] $amount [description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function payout($amount, $userId) {

		$customer = Customer::where('user_id' , '=', $userId)->first();
		$bonuses =  $this->escrow->where('user_id', '=', $userId)->where('status', '=', 'Ready')->get();

		foreach($bonuses as $bonus) {

			$amount = $this->bonusAmount($bonus->tier);
			$this->updateEscrowStatus($bonus->id);

			// Save stransfer
			$account;
		}

	}


	 public function bonusAmount($tier) {

	 	$amount = 0.00;
	 	if ($tier == 'Bronze') {
			$amount = 10000;
		}

		if ($tier == 'Silver') {
			$amount = 60000;
		}

		if ($tier == 'Gold') {
			$amount = 380000;
		} 	

		if ($tier == 'Ruby') {
			$amount = 2200000;
		}

		if ($tier == 'Diamond') {
			$amount = 41285500;
		}

		return $amount;
	 }

	 /**
	  * [getSupportedCountry description]
	  * @return [type] [description]
	  */
	 public function getSupportedCountry() {
	 	return SupportedCountry::get();
	 }

	 /**
	  * [getAllStripeAccounts description]
	  * @return [type] [description]
	  */
	 public function getAllStripeAccounts() {
	 	
		$stripe = new \Stripe\StripeClient($this->stripeLive);
		return $stripe->accounts->all()['data'];
	 }
}

 ?>