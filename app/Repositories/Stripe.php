<?php 
namespace App\Repositories;


class Stripe {

	public $stripe;


	public function __construct() {
	   $this->stripe = new \Stripe\StripeClient('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');
	}

	
	/**
	 * This function get stripe customer by passing customer id from the database
	 * @param  [type] $cusId [description]
	 * @return [type]        [description]
	 */
	public function getStripeCustomerById($cusId) {

		$stripe = new \Stripe\StripeClient('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');
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
		$stripe = new \Stripe\StripeClient('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');
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
		
		 $stripe = new \Stripe\StripeClient('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');
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

		if ($attributes['currency'] == 'gbp') {
			$stripe = new \Stripe\StripeClient('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');
			$bank = $stripe->tokens->create([
			  
			  'bank_account' => [
				  'country' => $attributes['country'],
				  'currency' => $attributes['currency'],
				  'account_holder_name' => $attributes['account_holder_name'],
				  'account_holder_type' => $attributes['account_holder_type'],
				  'account_number' => $attributes['account_number'],
				  'sort_code' => $attributes['sort_code'],
			    ],
			]);
		} else {
			$stripe = new \Stripe\StripeClient('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');
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
		}
		

		return $bank;
	}

	/**
	 * [AddExternalAccount description]
	 * @param [type] $accountId [description]
	 * @param [type] $bankId    [description]
	 */
	public function AddExternalAccount($accountId, $bankId){

		$stripe = new \Stripe\StripeClient('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');
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

		$stripe = new \Stripe\StripeClient('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');
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
		  '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'
		);

		$accountLink =  $stripe->accountLinks->create([
		  'account' => $accountId,
		  'refresh_url' => 'https://majesticares.com/dashboard/settings',
		  'return_url' => 'https://majesticares.com/dashboard/settings',
		  'type' => 'account_onboarding',
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
		$stripe = new \Stripe\StripeClient('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');
		
		$stripe->accounts->createExternalAccount(
		   $acct,
		  ['external_account' => $token]
		);
	}


	public function generateCardToken($attributes) {

		$stripe = new \Stripe\StripeClient('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');

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

		$stripe = new \Stripe\StripeClient('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');
		
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

		\Stripe\Stripe::setApiKey('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');
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

		$stripe = new \Stripe\StripeClient('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');
		$accounts = $stripe->accounts->all();
		return $accounts;
	}



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

}

 ?>