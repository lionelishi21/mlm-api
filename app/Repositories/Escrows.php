<?php 
namespace App\Repositories;

use App\Escrow;
use App\Repositories\Affiliates;

class Escrows {


	protected $escrow; 
	protected $affiliate;

	protected $bronze = 12;
    protected $silver = 36;
    protected $gold = 108;
    protected $ruby = 324;
    protected $diamond = 972;

	/**
	 * [__construct description]
	 * @param Escrow $escrow [description]
	 */
	public function __construct(Escrow $escrow) {
		$this->escrow = $escrow;
		$this->affiliate = New Affiliates;

	}


	public function getEscrowByUserId( $userID) {

		$affiliateId = $this->affiliate->where('user_id', '=', $userID)->first()->id;
		$escs = $this->escrow->where('userId', '=', $affiliateId)

		if ( $escs) {
			return [
				'escrow' => $escs
			]
		}
	}


	public function patch() {

		//first thing get all affiliates
		

		//secound check for escrow
		

		//check for escrow
		

		// create escrow
	}



	public function checkAffiliatesEscrow() {

		$affiliates = Affiliate::get();

		foreach( $affiliates as $affiliate) {
			$groupSales = $this->affiliates->getGroupSales($affiliate->user_id);
			$this->createEscrow($groupSales, $affiliate->user_id);
		}
	}

	/**
	 * *************************************************************
	 * This function check if the escrow exiest
	 * @param  [type] $affliateId [description]
	 * @param  [type] $status     [description]
	 * @return [type]             [description]
	 */
	public function checkIfEscrowExist($affliateId, $status) {

		$escrow = $this->escrow->where('tier', '=', $status)->where('user_id', '=', $affiliatesId)->count();
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
	public function createEscrow($groupSales, $affiliateId){


		 if ($groupSales >= $this->bronze) {

		 	 if (!$this->checkIfEscrowExist($affiliateId, 'Bronze')) {

			 	 $attributes = array ('tier' => 'Bronze', 
			 	 	'pf' => 34.95, 
			 	 	'amount_recieved' => 314.55, 
			 	 	'escrow' => 214.55,
			 	 	'sales' => 12,
			 	 	'user_id' => $affiliateId,
			 	 	'cashbonus' => 100.00
			 	 );

			 	 $this->escrow->create($attributes);
		 	 }
		 }


		 if ($groupSales >= $this->silver) {

		 	  if (!$this->checkIfEscrowExist($affiliateId, 'Silver')) {

		 	  	 $attributes = array ('tier' => 'Silver', 
			 	 	'pf' => 214.55, 
			 	 	'amount_recieved' => 1,930.95, 
			 	 	'escrow' => 1,330.95,
			 	 	'sales' => 36,
			 	 	'user_id' => $affiliateId,
			 	 	'cashbonus' => 600.00
			 	 );

			 	 $this->escrow->create($attributes);
		 	  }
		 }

		 if ( $groupSales >= $this->gold) {

		 	 if (!$this->checkIfEscrowExist($affiliateId, 'Gold')) {

		 	 	 $attributes = array ('tier' => 'Gold', 
			 	 	'pf' => 1,330.95 , 
			 	 	'amount_recieved' => 11,978.55, 
			 	 	'escrow' => 8,178.55 ,
			 	 	'sales' => 108,
			 	 	'user_id' => $affiliateId,
			 	 	'cashbonus' => 3,800
			 	 );

			 	 $this->escrow->create($attributes);
		 	 }
		 	
		 	 
		 }

		 
		 if ( $groupSales >= $this->ruby) {

		  	if (!$this->checkIfEscrowExist($affiliateId, 'Ruby')) {
		  		 $attributes = array ('tier' => 'Ruby', 
			 	 	'pf' =>  8,178.55 , 
			 	 	'amount_recieved' => 73,606.95, 
			 	 	'escrow' => 51,606.95 ,
			 	 	'sales' => 324,
			 	 	'user_id' => $affiliateId,
			 	 	'cashbonus' => 22,000.00
			 	 );
		  		  $this->escrow->create($attributes);
		  	}
		 	 
		 }


		  if ( $groupSales >= $this->diamond) {

		  		if (!$this->checkIfEscrowExist($affiliateId, 'Diamond')) {

		  			 $attributes = array ('tier' => 'Diamond', 
				 	 	'pf' =>  51,606.95, 
				 	 	'amount_recieved' => 464,462.55, 
				 	 	'escrow' => 51,606.95 ,
				 	 	'sales' => 972,
				 	 	'user_id' => $affiliateId,
				 	 	'cashbonus' => 412,855.60 
				 	 );
				 	  $this->escrow->create($attributes);
		  		}
			 	
		 }

		 if ($groupSales > $this->diamond ) {
		 	 $sales = $escrow->where('user_id', '=', $affiliateID)->where('teir', '=', 'Diamond')->orderBy('id', 'desc')->first();

		 }

	}
}


 ?>