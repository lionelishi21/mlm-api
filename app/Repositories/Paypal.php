<?php 
namespace App\Repositories;

use PayPal\Api\PayoutSenderBatchHeader;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\PaymentExecution;
use PayPal\Api\ExecutePayment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\Amount;
use PayPal\Api\Payout;
use PayPal\Api\Payer;
use PayPal\Api\Item;

use App\Repositories\Accounts;

use App\Customer;
use App\Escrow;
use App\User;






use Config;

class Paypal {

	private $_api_context;
	private $account;
	public function __construct() {
		
		$paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
        $this->account = new Accounts;
	}
	


	public function index($userId) {
		$customers = Customer::where('type', '=', 1)->where('user_id', '=', $userId)->get();

		if ( isset($customers)) {
			return ['account' => $customers];
		}
		return false;
	}

	/**
	 * this function handle paypal payout api
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function payout($userId) {

		$email = User::find($userId)->email;
		$escrows = Escrow::where('user_id', '=', $userId)->where('status', '=', 'Ready')->get();
	
		$response = array();
		foreach($escrows as $escrow) {

			if ($escrow->tier == 'Bronze') {
				$note = 'Bronze 100.00$ cash bonus';
			}

			if ($escrow->tier == 'Silver') {
				$note = 'Silver 600.00$ cash bonus';
			}

			if ($escrow->tier == 'Gold') {
				$note = 'Ruby 3800.00$ cash bonus';
			}

			if ($escrow->tier == 'Gold') {
				$note = 'Ruby 3800.00$ cash bonus';
			}


			$response[] = array(
				'email' => $email,
				'note' => $note,
				"currency" => "USD", 
				"value" => $escrow->cash_bonus
			);

			// $update = Escrow::find($escrow);
			// $update->status = 'Complete';
			// $update->save();

			// $this->saveTransfer($transfer->id, $userId);
		}

		return $payresponse = $this->sendPayout($response);

	}

	/**
	 * [addPaypalAccount description]
	 * @param array  $array  [description]
	 * @param [type] $userId [description]
	 */
	public function addPaypalAccount(array $array, $userId) {

		$customer = new Customer;
		$customer->user_id = $userId;
		$customer->customer_id = $array['email'];
		$customer->type = 1;
		$customer->save();
		if ( $customer->save()) {
			return true;
		}

		return false;
	}

	/**
	 * ******************************************************************
	 * THis function send payout to affiliates using payal account
	 * @param  [type] $userId   [description]
	 * @param  [type] $escrowId [description]
	 * @return [type]           [description]
	 * ******************************************************************
	 */
	public function singlePayout($userId) {

		$escrow = Escrow::where('user_id', '=', $userId)
	           // ->where('id', '=', $escrowId)
	           ->where('status', '=', 'Ready')
	           ->first();

	    $cash_bonus = $escrow->cash_bonus;

	    $note = '';
	    if ($escrow->tier == 'Bronze') {
			$note = 'Bronze 100.00$ cash bonus';
		}

		if ($escrow->tier == 'Silver') {
			$note = 'Silver 600.00$ cash bonus';
		}

		if ($escrow->tier == 'Gold') {
			$note = 'Ruby 3800.00$ cash bonus';
		}

		if ($escrow->tier == 'Gold') {
			$note = 'Ruby 3800.00$ cash bonus';
		}

		$response = $this->payWithpaypal();

		if ($response['status'] == true) {
			$escrow->status = 'Complete';
			$escrow->save();

			if ($escrow->save()) {
				$account = $this->account->saveTransfer($response['batch'], $userId, 'Paypal', $escrow->cash_bonus);
			}
		} 
		return $response;
	}



	/**
	 * [payWithpaypal description]
	 * @return [type] [description]
	 */
	public function payWithpaypal($amount = '100.00', $email = 'lionelishmael@gmail.com', $note = 'Cash Bonus'){
	   

	   $response = array();

      $payouts = new Payout();
      $senderBatchHeader = new PayoutSenderBatchHeader();

      $amount = array('value' => $amount, 'currency' => "USD");

       $senderBatchHeader->setSenderBatchId(uniqid())
       ->setEmailSubject("You have a Payout!");
    
       $senderItem = new \PayPal\Api\PayoutItem();
       $senderItem->setRecipientType('Email')
	    ->setNote($note)
	    ->setReceiver($email)
	    ->setSenderItemId("2014031400023")
        ->setAmount(new \PayPal\Api\Currency(
        	$amount 
         ));

       $payouts->setSenderBatchHeader($senderBatchHeader)
       ->addItem($senderItem);

       $request = clone $payouts;

       try {
		    $output = $payouts->create(array('sync_mode' => 'false'), $this->_api_context);
		
		} catch (Exception $ex) {

			 $response = array('message' => 'Payout was unsuccessful', 'status' => false);
			 return  $response;
		}

		$response = array(
			'message' => 'Created Single Synchronous Payout', 
			'batch' => $output->getBatchHeader()->getPayoutBatchId(),
			'status' => true
		);

		return $response;
     }

}


 ?>