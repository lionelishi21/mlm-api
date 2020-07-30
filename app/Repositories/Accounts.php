<?php 
namespace  App\Repositories;

use App\Customer;
use App\User;
use App\UserDetail;

class Accounts {


	public function userAccounts(){}

	/**
	 * [createUserAccountByUserId description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function createUserAccountByUserId($userId) {


		$customer = Customer::where('user_id', '=', $userId)->first();
		if ( !$customer ) {
			$customer = $this->storeCustomer($userId);
		} 
		
		if ($customer) {

			$accountId = $this->createCustomerAccount($userId);
			return [
				'account' => $this->createAccountLink($accountId)
			];
		}
	}


	/**
	 * this function is use to store customer
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function storeCustomer($userId) {

		 $user = User::find($userId);
		 $stripe = new \Stripe\StripeClient('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');


		 $customers = $stripe->customers->create([
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

	          $stripe = new \Stripe\StripeClient('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');
			  $account = $stripe->accounts->create([
				  'type' => 'express',
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
	 * [createAccountLink description]
	 * @param  [type] $accountId [description]
	 * @return [type]            [description]
	 */
	public function createAccountLink($accountId) {

		$stripe = new \Stripe\StripeClient(
		   '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'
		);

		$account = $stripe->accountLinks->create([
		 
		  'account' =>  $accountId,
		  'refresh_url' => 'https://majesticares.com/dashboard/wallet',
		  'return_url' => 'https://majesticares.com/dashboard/wallet',
		  'type' => 'account_update',
		  'collect' => 'eventually_due',
		]);

		return $account;
	}

	/**
	 * [getAccount description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getAccount($userId) {

	}


	/**
	 * this function trasfer 
	 * @param  [type] $amount [description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function transfer($amount, $userId) {

		$customer = Customer::where('user_id' , '=', $userId)->first();
		
		$stripe = new \Stripe\StripeClient(
		    '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'
		);


		$transfer = $stripe->transfers->create([
		  'amount' => $amount,
		  'currency' => 'usd',
		  'destination' => $customer->account_id,
		  'transfer_group' => 'ORDER_'.$userId,
		]);

		if ($transfer) {

			//Update cashbonus
			$escrows = $this->escrow->where('user_id', '=', $userId)->where('status', '=', 'Ready')->get();	
			foreach ( $escrows as $escrow) {

				$update = Escrow::find($escrow->id);
				$update->status = 'Pending';
				$update->save();
			}
		}

		return $transfer;
	}  
}


