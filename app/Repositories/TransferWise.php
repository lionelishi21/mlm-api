<?php 
namespace App\Repositories;

use TransferWise\SDK;


class TransferWise {


	protected $apiKey = '';
	protected $client;
	protected $sdk;

	public function __construct() {
		$client = SDK::createClient($this->apiKey,  SDK::API_MODE_SANDBOX);
		$this->sdk = new SDK($client);
	}

	/**
	 * LIST ALL TRANSFERS
	 * @return [type] [description]
	 */
	public function index() {

		// Show cuurent authenticated user
		$whoami = $sdk->users()->me();
     	$transfers = $sdk->transfers()->list(['status' => 'funds_refunded']);
     	return $transfers;
	}


	
	public function transfer() {
		
	}
}

 ?>