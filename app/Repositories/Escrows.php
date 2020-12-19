<?php 
namespace App\Repositories;

use App\Escrow;
use App\PersonalGroupSales;
use App\Repositories\Affiliates;
use App\Repositories\Accounts;
use App\Affiliate;
use Carbon\Carbon;


class Escrows {


	protected $amount;
	protected $escrow; 
	protected $affiliate;
	protected $bronze = 12;
    protected $silver = 108;
    protected $gold = 324;
    protected $ruby =  927;
    protected $diamond = 11124;


	/**
	 * [__construct description]
	 * @param Escrow $escrow [description]
	 */
	public function __construct() {
		$this->escrow = new Escrow;
		$this->affiliate = New Affiliates;
		$this->account = new Accounts;

	}

	/**
	 * [escrow description]
	 * @param  [type] $affiliateId [description]
	 * @return [type]              [description]
	 */
	public function escrow($affiliateId) {
			
		// $escrow-> $this->		
	} 

	/**
	 * [all description]
	 * @return [type] [description]
	 */
	public function getAll() {
		 
		$response = array();		
		$escrows = Escrow::with('user')->orderBy('id', 'desc')->get();


		$response = array();

		foreach ($escrows as $escrow) {
			
			$response = array(
				''
			);
		}

		if ( $escrows ) {
			return $escrows;
		}
	}


	/**
	 * [getEscrowByUserId description]
	 * @param  [type] $userID [description]
	 * @return [type]         [description]
	 */
	public function getEscrowByUserId( $userID) {

		$this->checkAffiliatesEscrow();

		$affiliate = new Affiliate;
		$affiliateId = $affiliate->where('user_id', '=', $userID)->first()->id;
		return $this->escrow->where('user_id', '=', $affiliateId)->where('status', '=', 'Ready')->get();
		
	}

	/**
	 * [checkAffiliatesEscrow description]
	 * @return [type] [description]
	 */
	public function checkAffiliatesEscrow() {

		$affiliates = Affiliate::get();

		foreach( $affiliates as $affiliate) {
			
			$groupSales = $this->affiliate->getGroupSales($affiliate->user_id);
			$this->createEscrow($groupSales, $affiliate->user_id);
		}
	}

	/**
	 * *************************************************************
	 * This function check if the escrow exiest
	 * @param  [type] $userId [description]
	 * @param  [type] $status     [description]
	 * @return [type]             [description]
	 */
	public function checkIfEscrowExist($userId, $status) {

		$escrow = $this->escrow->where('tier', '=', $status)->where('user_id', '=', $userId)->count();
		if ( $escrow > 0 ) {
			return true;
		}
		return false;
	}

	/**
	 * [createEscrow description]
	 * @param  [type] $groupSales  [description]
	 * @param  [type] $affiliateId [description]
	 * @return [type]              [description]
	 */
	public function createEscrow($gsales, $userId){


		$pgsales = PersonalGroupSales::where('user_id', '=', $userId)->count();
		$groupSales = $gsales + $pgsales;

		 if ($groupSales >= $this->bronze) {

		 	 if (!$this->checkIfEscrowExist($userId, 'Bronze')) {

			 	 $attributes = array ('tier' => 'Bronze', 
			 	 	'pf' => 34.95, 
			 	 	'amount_recieved' => 314.55, 
			 	 	'escrow' => 214.55,
			 	 	'sales' => 12,
			 	 	'user_id' => $userId,
			 	 	'cash_bonus' => 100.00
			 	 );

			 	 $this->escrow->create($attributes);
		 	 }
		 }


		 if ($groupSales >= $this->silver) {

		 	  if (!$this->checkIfEscrowExist($userId, 'Silver')) {

		 	  	 $attributes = array ('tier' => 'Silver', 
			 	 	'pf' => 214.55, 
			 	 	'amount_recieved' => 1930.95, 
			 	 	'escrow' => 1330.95,
			 	 	'sales' => 36,
			 	 	'user_id' => $userId,
			 	 	'cash_bonus' => 600.00
			 	 );

			 	 $this->escrow->create($attributes);
		 	  }
		 }

		 if ( $groupSales >= $this->gold) {

		 	 if (!$this->checkIfEscrowExist($userId, 'Gold')) {

		 	 	 $attributes = array ('tier' => 'Gold', 
			 	 	'pf' => 1330.95 , 
			 	 	'amount_recieved' => 11978.55, 
			 	 	'escrow' => 8178.55 ,
			 	 	'sales' => 108,
			 	 	'user_id' => $userId,
			 	 	'cash_bonus' => 3800
			 	 );

			 	 $this->escrow->create($attributes);
		 	 }
		 	
		 	 
		 }

		 
		 if ( $groupSales >= $this->ruby) {

		  	if (!$this->checkIfEscrowExist($userId, 'Ruby')) {
		  		 $attributes = array (
		  		 	'tier' => 'Ruby', 
			 	 	'pf' =>  8178.55 , 
			 	 	'amount_recieved' => 73606.95, 
			 	 	'escrow' => 51606.95,
			 	 	'sales' => 324,
			 	 	'user_id' => $userId,
			 	 	'cash_bonus' => 22000.00
			 	 );
		  		  $this->escrow->create($attributes);
		  	}
		 	 
		 }


		  if ( $groupSales >= $this->diamond) {

		  		if (!$this->checkIfEscrowExist($affiliateId, 'Diamond')) {

		  			 $attributes = array ('tier' => 'Diamond', 
				 	 	'pf' =>  51606.95, 
				 	 	'amount_recieved' => 464462.55, 
				 	 	'escrow' => 51606.95,
				 	 	'sales' => 972,
				 	 	'user_id' => $affiliateId,
				 	 	'cash_bonus' => 400000.00 
				 	 );
				 	  $this->escrow->create($attributes);
		  		}
			 	
		 }

		 // if ($groupSales > $this->diamond ) {
		 // 	 $sales = $escrow->where('user_id', '=', $affiliateID)->where('teir', '=', 'Diamond')->orderBy('id', 'desc')->first();

		 // }

	}

	/**
	 * THIS FUNCTION GET ALL USER PAYOUTS
	 * @return [type] [description]
	 */
	public function getPayouts() {

		$payouts = $this->escrow->with('user')->orderBy('id', 'desc')->get();
		$response = array():

		foreach( $payouts as $payout) {

			$response[] = array(
				'id' => $payout->id,
				'tier' => $payout->tier,
				'status' => $payout->status,
				'user' => $payout->user->first_name.' '.$payout->user->last_name,
				'email' => $payout->user->email,
				'phone_numner' => $payout->phone_number,
				'user_id' => $payout->user->id,
				'status' => $payout->status,
				'status1' => $this->payoutStatus($payout->updated_at, $payout->status)
			);
		}
		return $response;
	}


	/**
	 * this function create manual payouts for the user
	 * @param  array  $array [description]
	 * @return [type]        [description]
	 */
	public function makeManualPayout(array $array, $type) {

		$payoutId = $array['payout_id'];
		$update = Escrow::find($payoutId);
		$update->status = 'Pending';
		$update->save(); 

		if ( $update->save()) {
			return $this->account->saveTransfer('manual_payout_by_admin', $update->user_id, $type, $update->cash_bonus );
		}
		
		return false

	}

	/**
	 * GET USER PAYOUT STATUS
	 * @param  [type] $date   [description]
	 * @param  [type] $status [description]
	 * @return [type]         [description]
	 */
	public function payoutStatus($date, $status) {

		$date1 = Carbon::parse($date);
		$today = Carbon::today();

		$dt = Carbon::create(2017, 4, 4);
        $dt2 = Carbon::create(2017, 4, 18);

        $daysForExtraCoding = $date1->diffInDaysFiltered(function(Carbon $date) {
		       return !$date->isWeekend();
		}, $today);

		if ($status == 'pending') {
			return  $daysForExtraCoding;
		} 
	}
}


 ?>