<?php 
namespace  App\Repositories;

use App\Repositories\Stripe;
use App\Customer;
use App\User;
use App\Transfer;
use App\UserDetail;
use App\Escrow;

class Accounts extends Stripe {

	// Refactor starts here
	private $customer;

	public function __construct() {
		// $this->stripe = new \Stripe\StripeClient($this->stripeLive);
		$this->customer = new Customer;
		$this->escrow = new Escrow;
	}

	/**
	 * [getAllUsersStripeAccount description]
	 * @return [type] [description]
	 */
	public function getAllUsersStripeAccount() {
		return $this->getAllStripeAccounts();
	}

	/**
	 * get srtipe balancr transactions 
	 * @return [type] [description]
	 */
	public function getStripeTransaction() {
		return $this->balanceTransaction();
	}

	/**
	 * **************************************************************************
	 * This function creates customer
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function createAccount($userId) {

		$user = User::find($userId);

		$details = UserDetail::where('user_id', '=', $userId)->first();

		$country = $details->country;
		$account = $this->createStripeAccount($user->email, $country);

		$customer = $this->customer->where('user_id', '=', $userId)->first();
		$customer->account_id = $account->id;
		$customer->type = 3;
		$customer->save();

		if ($customer->save()) {
			return [
				'customer' => true,
				'account' => $account 
			];
		} 
	}


	
	/**
	 * *************************************************************************
	 * This function creates bank token
	 * @param  array  $attributes [description]
	 * @return [type]             [description]
	 */
	public function generateToken(array $attributes) {
		return $this->generateBankToken($attributes);
	}

	/**
	 * [connectExternalAccount description]
	 * @param  [type] $userId [description]
	 * @param  [type] $bankId [description]
	 * @return [type]         [description]
	 */
	public function connectExternalAccount($userId, $bankId) {
		$customer = $this->customer->where('user_id', '=', $userId)->first();

		if ($customer->account_Id) {
			$external_account = $this->getExternalAccount($customer->account_id);
			if ( isset( $external_account ) ){
				return;
			} else {
				$this->AddExternalAccount($customer->account_id, $bankId);
				return;
			}
		}
		$this->AddExternalAccount($customer->account_id, $bankId);
	}




	/**
	 * [updateExternalAccount description]
	 * @param  [type] $userId [description]
	 * @param  array  $array  [description]
	 * @return [type]         [description]
	 */
	public function updateExternalAccount($userId, array $array ) {

	}

	/**
	 * This function check  if ecternal account exist
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getAccount($userId) {

		$customer = Customer::where('user_id', '=', $userId)->first();
		if ($customer->account_id) {
			return true;
		}
		return false;
	}

	/**
	 * Get stripe account link
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function accountLink($userId) {
		$customer = Customer::where('user_id', '=', $userId)->first();
		return $this->generateAccountLink($customer->account_id);
	}


	public function getUserAccountsByUserId( $userId) {

		$response = array();
		$customers = Customer::where('user_id', '=', $userId)->get();


		foreach( $customers as $cus) {

			$account_type = '';

			if ($cus->type == 1) {
				$account_type = 'Paypal';
			}

			if ($cus->type == 2) {
				$account_type = 'Payooner';
			}

			if ($cus->type == 3) {
				$account_type = 'Stripe';
			}

			if ($cus->type == 5) {
				$account_type = 'MCC';
			}

			if ($cus->account_id != null && $cus->type == 3) {
				$response[] = array(
					'type' => $account_type
				);
			} 

			if ($cus->type == 1) {
				$response[] = array(
					'type' => $account_type
				);
			}


			if ($cus->type == 5) {
				$response[] = array(
					'type' => $account_type
				);
			}
		}

		return  $response;
	}


	/**
	 * This function get transaction details for transfers
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getTransactions($userId) {
		$transfers = Transfer::where('user_id', '=', $userId)->get();
		return $transfers;
	}



	// End Refactore

	
	/**
	 * get customer account
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function userAccount($userId) {

		$customer = $this->customer->where('user_id', '=', $userId)->first();
		if ($customer) {
			return $this->getUserAccountByAccountId($customer->account_id);
		}

	}


	/**
	 * [createUserAccountByUserId description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function createUserAccountByUserId($userId) {

	}


	/**
	 * this function is use to store customer
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function storeCustomer($userId) {

		$user = User::find($userId);
		 $customers = $this->stripe->customers->create([
		 	 'name'  => $user->name,
		 	 'email' => $user->email,
		 	 'description' => 'MCC Affiliate'
		 ]);


		 if ( $customers) {

		 	$customer = new Customer;
		 	$customer->user_id = $userId;
		 	$customer->customer_id = $customers->id;
		 	$customer->save();
		 	return true;
		 }
		 return false;
	}
    
	/**
	 * [createCustomerAccount description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function createCustomerAccount($userId) {

		 $user = User::find($userId);

		 $country = UserDetail::where('user_id', '=', $user->id)->first()->country;
         $customer = Customer::where('user_id', '=', $userId)->first();
        
         if ($customer->account_id) {
         
         	return $customer->account_id;
        
         } else {
			  $account = $this->stripe->accounts->create([
				  'type' => 'custom',
				  'country' => $country,
				  'email' => $user->email,
				  'type' => 'custom',
				  'requested_capabilities' => [
				    'card_payments',
				    'transfers',
				  ],
		      ]);
	        
	          $customer->account_id = $account->id;
              $customer->save();

              return $account->id;
         }
	}

	/**
	 * this function trasfer 
	 * @param  [type] $amount [description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function transfer($amount, $userId) {

		$customer = Customer::where('user_id' , '=', $userId)->first();
		$bonuses =  $this->escrow->where('user_id', '=', $userId)->where('status', '=', 'Ready')->get();


		$details = UserDetail::where('user_id', '=', $userId)->first();

		if ($details->country == 'GB') {

			foreach($bonuses as $bonus) {
				$stripe = new \Stripe\StripeClient($this->stripeLive);

				$amount = 0.00;
				
				if ($bonus->tier == 'Bronze') {
					$amount = 76;
				}

				if ($bonus->tier == 'Silver') {
					$amount = 458;
				}

				if ($bonus->tier == 'Gold') {
					$amount = 2899;
				}

				if ($bonus->tier == 'Ruby') {
					$amount = 16786;
				}

				if ($bonus->tier == 'Diamond') {
					$amount = 412855;
				}

				$transfer = $stripe->transfers->create([
					'amount' => $amount,
					'currency' => 'gbp',
				    'destination' => $customer->account_id,
			        'transfer_group' => 'payout_england',
				]);	


				$update = Escrow::find($bonus->id);
				$update->status = 'Pending';
				$update->save();

				$this->saveTransfer($transfer->id, $userId, 'Bank', $amount);
			}

			return true;
		}

		foreach($bonuses as $bonus) {
			$stripe = new \Stripe\StripeClient($this->stripeLive);

			$amount = 0.00;
			if ($bonus->tier == 'Bronze') {
				$amount = 10000;
			}

			if ($bonus->tier == 'Silver') {
				// $amount = 60000;
			}

			if ($bonus->tier == 'Gold') {
				// $amount = 380000;
			}

			if ($bonus->tier == 'Ruby') {
				// $amount = 2200000;
			}

			if ($bonus->tier == 'Diamond') {
				// $amount = 41285500;
			}

			$transfer = $stripe->transfers->create([
				'amount' => $amount,
				'currency' => 'usd',
			    'destination' => $customer->account_id,
		        // 'transfer_group' => 'payout_'.$userId,
			]);	

			$update = Escrow::find($bonus->id);
			$update->status = 'Pending';
			$update->save();

			$this->saveTransfer($transfer->id, $userId, 'Bank', $amount);
		}

		return true;
	}  


	/**
	 * [saveTransfer description]
	 * @param  [type] $transferId [description]
	 * @param  [type] $userId     [description]
	 * @return [type]             [description]
	 */
	public function saveTransfer($transferId, $userId, $type, $amount) {

		$total = 0;

		if ($amount == 10000) {
			$total = 100;
		}

		if ($amount == 60000) {
			$total = 600;
		}

		if ($amount == 380000) {
			$total = 3800;
		}

		if ($amount == 2200000) {
			$total = 22000;
		}

		$transfer = new Transfer;
		$transfer->user_id = $userId;
		$transfer->transfer_id = $transferId;
		$transfer->type = $type;
		$transfer->amount = $total;
		$transfer->save();

		if ($transfer->save()) {
			return true;
		}

		return false;
	}


	public function AddExternalBankAccount() {

		$customer = Customer::where('user_id', '=', $user_id)->first();
	}


	/**
	 * [addBankInformation description]
	 * @param array  $attributes [description]
	 * @param [type] $userId     [description]
	 */
	public function addBankInformation(array $attributes, $userId) {

		 $customer = Customer::where('user_id', '=', $userId)->first();

		 $userAccoun = $this->createStripeAccount($userId);
		 
		 $bank = $this->generateBankToken($attributes);
		 if (!$bank) {
		 	return $bank;
		 }

		 $accountId = $this->getCustomerAccountId($userId);

		 if (!$accountId) {
		 	return $accountId;
		 }

		 $externalAccount = $this->addExternalBankAccountByAccountId($accountId, $bank);
		 return $externalAccount;
	}

	public function storeAccount($email, $account) {
		
	    $user = User::where('email', '=', $email)->first();

	    $stripecustomer = $this->getStripeCustomer($user->id);

	    if (!$stripecustomer) {
	    	 $storecustomer = $this->storeCustomer($user->id);
	    }
	   
	    $customer = Customer::where('user_id', '=', $user->id)->first();
		$customer->account_id = $account;
		$customer->save();
		
	}


	public function getStripeCustomer($userId) {

		$customer = Customer::where('user_id', '=', $userId)->first();
		if ($customer) {
			return true;
		}
		return false;
	}


	public function saveCustomer($email, $customerId) {

		$user = User::where('email', '=', $email)->first();

		$customer = new Customer;
		$customer->user_id = $user->id;
		$customer->customer_id = $customerId;
		$customer->save();

		if ( $customer->save()) {
			return true;
		}

		return false;
	}


	public function getStripeCustomerByEmail($email) {

		$customer = $this->stripe->customers->retrieve(
		  $email,
		  []
        );
        return $customer;
	}

	/**
	 * this function add external bank account to the user stripe account
	 * @param [type] $accountId [description]
	 * @param [type] $bankId    [description]
	 */
	public function addExternalBankAccountByAccountId($accountId, $bankId) {
		
		$external = $this->stripe->accounts->createExternalAccount(
		    $accountId,
		  [
		    'external_account' => $bankId,
		  ]
		);
	    return $external;
	}


	public function updateAccountByUserId($account) {}

	/**
	 * [getUserAccountByAccountId description]
	 * @param  [type] $accountId [description]
	 * @return [type]            [description]
	 */
	public function getUserAccountByAccountId($accountId) {
		
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
	 * [getCustomerAccountId description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getCustomerAccountId($userId) {

		$customer = $this->customer->where('user_id', '=', $userId)->first();
		if ($customer) {
			return $customer->account_id;
		}
		return false;
	}

	/**
	 * get stripe account information
	 * @param  [type] $accountId [description]
	 * @return [type]            [description]
	 */
	public function getSAccount($userId) {

		$account = Customer::where('user_id', '=', $userId)->first();
		if ($account) {
			$accountId = $account->account_id;


			$accountDetails = $this->getUserStripeAccount($accountId);

			$name = '';
			if ($accountDetails['individual']) {
				$name = $accountDetails['individual']['first_name'].' '.$accountDetails['individual']['last_name'];
			}
			

			$response = array(
				'country' => $accountDetails['country'],
				'name' => $name,
				'transfer' => $accountDetails['capabilities']['transfers']

			);

			return $response;
		}
	}

	/**
	 * [CustomerAccountLink description]
	 * @param [type] $userId [description]
	 */
	public function CustomerAccountLink($userId) {

		 $customer = Customer::where('user_id', '=', $userId)->first();
		 if (!isset( $customer )){

		 	$user = User::find($userId);
		 	$details = UserDetail::where('user_id', '=', $userId)->first();

		 	$createdCustomer = $this-> saveStripeCustomer($user->name, $user->email);
		 	if ($createdCustomer) {
		 		$this->saveCustomer($user->email, $createdCustomer->id);
		 	}

		 	$createdAccount  = $this->createStripeAccount($user->email, $details->country);
		 	if ($createdAccount) {
		 		$this->storeAccount($user->email, $createdAccount->id);
		 	}

		 	return $this->generateAccountLink($createdAccount);
		 }
	}

	/**
	 * [removeExternalAccount description]
	 * @param  array  $attributes [description]
	 * @return [type]             [description]
	 */
	public function removeExternalAccount(array $attributes) {

		$id = $attributes['id'];
		$object = $attributes['object'];
		$accountId = $attributes['account_id'];

		return $this->deleteExternalAccountCard($accountId,$id,$object);
	}


	/**
	 * [accountLink description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function CustomerUpdateLink($userId) {
		
		$customer = Customer::where('user_id', '=', $userId)->first();
		if ($customer->account_id) {
			$accountId = $customer->account_id;
			return $this->generateUpdateAccountLink($accountId);
		}

	}

	/**
	 * [getStripeBalance description]
	 * @return [type] [description]
	 */
	public function getStripeBalance() {
		return $this->balance();
	}
}


