<?php 
namespace App\Repositories;

use App\Repositories\AffiliateStats;
use App\Repositories\SuperBoosters;
use App\Repositories\Affiliates;
use App\Repositories\Purchases;
use App\PersonalGroupSales;
use Carbon\Carbon;
use App\Booster;
use App\Bonus;
use App\User;
use DB;

class Boosters {

	protected $affiliate;
	protected $superbooster;
	protected $super;
	protected $user;

	public function __construct() {

		$this->personalgroupsales = new PersonalGroupSales;

		$this->superbooster = new SuperBoosters;
		$this->affiliates = new Affiliates;
		$this->booster = new Booster;
		$this->user = new User;
	}

	/**
	 * THIS FUNCTION BOOSTER PACKAGE DETAILS
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getBoosterDetailById( $id ) {

		$booster = $this->booster->find( $id );
		$members = $this->getChildren($id);
		$escrow = $this->getEscrow( $id );
		

		$user = User::find($booster->user_id);


		$response = array(
			'total' => $this->getGroupSales( $id ),
			'members' =>  $members,
			'name' => $user->first_name.' '.$user->last_name,
			'email' => $user->first_email,
			'escrow' => $escrow,
			'sales_count' => $this->getGroupSalesCount($booster->id),
			'percentage' => $this->getSalesPercentage($id),
			'payitfor' => $this->getPayitForwadAmount( $id)
		);

		// $allboosters = $this->booster->get();

		// foreach( $allboosters as $boost) {
		// 	$cash = $this->triggerCashbonus($boost->id, $boost->user_id);
		// }

		return $response;
	}

	/**
	 * This function get user boosters details
	 * @param  [type] $user_id [description]
	 * @return [type]          [description]
	 */
	public function getUserBoosterDetails( $user_id ) {

		$response = array(
			'user' => User::find($user_id),
			'boosters' => $this->getBoosterPackagesUserId($user_id),
			'sys_boosters' => $this->getBoosterPackagesUserId($user_id, 1)
		);

		return $response;
	}


	/**
	 * this function GET ALL USER BOOSTER Packages
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getBoosterPackagesUserId( $userId, $is_system = 0 ) {

		$response = array();
		$boosters = Booster::where('user_id', '=', $userId)
		->orderBy('id', 'asc')
		->where('is_system', '=', $is_system)
		->get();


		foreach( $boosters as $booster) {

			$date = Carbon::parse($booster->created_at);

			$response[] = array(
				'name' => 'Booster Packages',
				'id' => $booster->id,
				'date' => $date->toDayDateTimeString(),
				'is_system' => $booster->is_system
			);
		}

		return $response;
	}

	
	public function getEscrow( $id ) {

		$total = 0;
		$boosters = $this->booster->with('user')->where('parent_id', '=', $id)->get();

		foreach($boosters as $booster ) {
			$total += $this->getGroupSales($booster->id);
		}

		return $total;
	}

	/**
	 * ****************************************************************************************
	 * [getChildren description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 * ****************************************************************************************
	 */
	public function getChildren( $id ) {

		$response = array();
		$boosters = $this->booster->with('user', 'bonus')->where('parent_id', '=', $id )->get();

		// Booster::fixTree();

		foreach( $boosters as $booster) {

			$user = $this->user->find( $booster->user_id );
			$response[] = array(
				'id' => $booster->user_id,
				'name' => $user->first_name.' '.$user->last_name,
				'email' => $user->email,
				'children' => $this->getGrandchild($booster->id),
				'escrow' => $this->getGroupSales($booster->id), 
				'sales_count' => $this->getGroupSalesCount($booster->id),
				'percentage' => $this->getSalesPercentage($booster->id)
			);
		}

		return $response;
	}



	/**
	 * [getGrandchild description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getGrandchild($id) {
		
		$response = array();
		$affiliates = Booster::with('user')->where('parent_id', '=', $id)->get();
		
		foreach($affiliates as $affiliate) {
		
			$user = User::find( $affiliate->user_id );
			$response[] = array(
				'id' => $affiliate->id,
				'name' => $user->first_name.' '.$user->last_name,
				'email' => $user->email
				
			);
		}
		return $response;
	}

	/**
	 * [totalSales description]
	 * @return [type] [description]
	 */
	public function totalSales() {

		$boosters = $this->booster->get();
		$cals = 0;

		foreach( $boosters as $booster ) {
			$cals += $booster->cost;
		}

		return number_format($cals, 2);
	}


	   /**
     * THIS FUNCTION GET SALES PERCENTAGE BASE ON THE AFFILIATE ID
     * @param  [type] $affiliateId [description]
     * @return [type]              [description]
     */
	public function getSalesPercentage($affiliateId) {

		$cals = 1;
		$position = 0;
		$trigger = 0;
		$sale_status = 'tier 1';

		$totalSales = $this->totalSales();
		$groupSales = $this->getGroupSales($affiliateId);

		$depth = Booster::withDepth()->where('id', '=', $affiliateId)->first()->depth;

		if ( $groupSales <= 225.00 ) {

			for( $i = 1; $i < $depth; $i++ ){
				$cals = $cals * 2;
			}

			$trigger = $cals * 225.00;
			$total_sales = $totalSales;
			$position =  (  (float)$total_sales /  (float)$trigger );
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'tier 1';
		}

		if ( $groupSales > 225.00 && $groupSales <= 2700.00 ) {

			$trigger = $cals * 2700.00;
			$total_sales = $totalSales;
			$position =  (  (float)$total_sales /  (float)$trigger );
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'tier 2';
		}

		if ( $groupSales > 2700.00 && $groupSales <= 2700.00 ) {

			$trigger = $cals * 2700.00;
			$total_sales = $totalSales;
			$position =  (  (float)$total_sales /  (float)$trigger );
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'tier 3';
		}

		if ( $groupSales > 2700.00 && $groupSales <= 24300.00 ) {

			$trigger = $cals * 24300.00;
			$total_sales = $totalSales;
			$position =  (  (float)$total_sales /  (float)$trigger );
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'tier 4';
		}

			$response = array(
        	'group_sales' => $this->getGroupSales($affiliateId),
        	'level' => Booster::withDepth()->where('id', '=', $affiliateId)->first()->depth,
        	'position' => $position,
        	'total_sales' => $total_sales,
        	'trigger' => $trigger,
        	'status' => $sale_status,
         );

		 return $response;
	}

	/**
	 * ************************************************************
	 * THIS FUNCTION CREAT BOOSTER PACKAGES
	 * ************************************************************
	 * @param  [type] $user_id [description]
	 * @param  [type] $qty     [description]
	 * @return [type]          [description]
	 * ************************************************************
	 */
	public function createBooster( $user_id, $qty, $sys = 0) {

		for($i = 0; $i < $qty; $i++) {
		
			$booster = new Booster;
			$booster->parent_id = $this->nextAvailableSpot();
			$booster->user_id = $user_id;
			$booster->is_system = $sys;
			$booster->save();

			if ( $booster->save() ) {

				$allboosters = $this->booster->get();
				foreach( $allboosters as $boost) {
					$cash = $this->triggerCashbonus($boost->id, $boost->user_id);
				}
				
			}
		}

		return $booster;
	}


	/**
	 * ********************************************************************
	 * THIS FUNCTION TRIGGER CASHNONUSES
	 * @param  [type] $affiliateId [description]
	 * @return [type]              [description]
	 * ********************************************************************
	 */
	public function triggerCashbonus( $affiliateId, $userId  ) {

		$sales = $this->getGroupSales( $affiliateId );
		$escrow = $this->getPayitForwadAmount( $affiliateId );

		if ( $sales >= 12 && $sales < 108 ) {
				$per_group_sales = $this->createPersonalGroupSales($userId, $affiliateId, 2, 'BP1');
				return $per_group_sales;
		}

		
		if ($sales >= 108 && $sales < 324 ) {
			
			$per_group_sales = $this->createPersonalGroupSales($userId, $affiliateId, 6, 'BP2');
			if ( $per_group_sales == false ) {
				return;
			}

			//Creste Cash bonues
			$cashbonus =  400.00;
			$create_cash_bonus = $this->affiliates->createBoosterPayout($cashbonus, $userId, 'BP2');

			//create system packages 
			$system_qty = 2;
			$system_purchases = $this->createBooster($userId, $system_qty, $sys = 1);
		}
		
		if ( $sales >= 324 && $sales < 927 ) {

			$per_group_sales = $this->createPersonalGroupSales($userId, $affiliateId, 20, 'BP3');
			if ( $per_group_sales == false ) {
				return;
			}

			//Creste Cash bonues
			$cashbonus =  400.00;
			$create_cash_bonus = $this->affiliates->createBoosterPayout($cashbonus, $userId, 'BP3');

			//create system packages 
			$system_qty = 3;
			$system_purchases = $this->createBooster($userId, $system_qty, $sys = 1);
		
		}


		if ( $sales >= 927 ) {

			$per_group_sales = $this->createPersonalGroupSales($userId, $affiliateId, 50, 'BP4');
			if ( $per_group_sales == false ) {
				return;
			}

			//Creste Cash bonues
			$cashbonus =  10600.00;
			$create_cash_bonus = $this->affiliates->createBoosterPayout($cashbonus, $userId, 'BP4');

	
			$spaces = $this->createMccSpaces($userId, 50, $affiliateId);

			//create system packages 
			$system_qty = 5;
			$system_purchases = $this->superBooster->createBooster($userId, $system_qty, $sys = 1);
		
		}
	}

	public function createSystemPackages() {}

	public function getPayitForwadAmount($affiliateId) {
		$boosters = Booster::where('parent_id', '=', $affiliateId)->get();
		$escrow = 0;
		if ($boosters) {
			foreach( $boosters as $boost) {
			
				$children = Booster::with('bonus')->where('parent_id', '=', $boost->id)->get();
				foreach( $children as $child) {
					if ($child->bonus) {
						$escrow += $child->bonus->escrow;
					}
					
				}
			}	
		}
		return $escrow;
	}

	
	/**
	 * [createMccSpace description]
	 * @param  [type] $userId [description]
	 * @param  [type] $cost   [description]
	 * @return [type]         [description]
	 */
	public function createMccSpaces($userId, $space, $booster_id) {

		for ($x = 0; $x < $spaces; $x++) {
	  		$purchase = new Purchases;
        	$purchase->createMccSystemPackages($userId, $cost, $booster_id);
		}
	}	

	/**
	 * ****************************************************************
	 * THIS FUNCTION PLACE USER IN THE NEXT AVAILABLE SPOT
	 * ****************************************************************
	 * @return [type] [description]
	 * ****************************************************************
	 */
	public function nextAvailableSpot() {

		$boosters = $this->booster->orderBy('id', 'asc')->get();
		foreach( $boosters as $aff) {
			$count = $this->getMatrixCount($aff->id);
			if ($count < 3) {
				return $aff->id;
				break;
			}
		}
	}

	
	/**
	 * ********************************************************************
	 * THIS FUNCTION COUNTS MATRIX
	 * ********************************************************************
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 * ********************************************************************
	 */
	public function getMatrixCount($userId) {
		return $this->booster->where('parent_id', '=', $userId)->count();
	}

	/**
	 * ***************************************************************************
	 * this function cound group sales count
	 * ****************************************************************************
	 * @param  [type] $affiliateId [description]
	 * @return [type]              [description]
	 */
	public function getGroupSalesCount($affiliateId) {

		$boosters = $this->booster::where('parent_id', '=', $affiliateId)->get();
	    $firstCounts = count($boosters);
	    $count = 0;

        foreach($boosters as $affiliate) {

        		$cost = 0;
                $escrows = Booster::descendantsOf($affiliate->id);
                $count += count($escrows);
        }
       
	    return $count + $firstCounts; 
	}

	/**
	 * THIS FUNCTL GET ALL BOOSTER PACKAGES
	 * @param  array  $array [description]
	 * @return [type]        [description]
	 */
	public function getAllMembers(array $array) {
	


	    $affiliates = DB::table('boosters')->get();
	
		
		$response = array();
		$affiliate = array();
		
		foreach($affiliates as $affil) {
           
           	$user = User::find($affil->user_id);

			$response[] = array(
				'id'     => $affil->user_id,
				'booster_id' => $affil->id,
				'sales' => $this->getGroupSalesCount($affil->id),
				'affiliate_id' => $affil->id,
				'name'   => $user->first_name.' '.$user->last_name,
				'email'  => $user->email,
				// 'escrow' => $this->getRealEscrow($affil->id),
				'is_system' => $affil->is_system,
				'boosters' =>  count(Booster::where('user_id', '=', $affil->user_id)->where('is_system', '=', 0)->get()),
				'systems' => count(Booster::where('user_id', '=', $affil->user_id)->where('is_system', '=', 1)->get())
			);

			$affiliate[] = $affil->user_id;

		}

		$allboosters = $this->booster->all();
		foreach( $allboosters as $booster) {
			$cash = $this->triggerCashbonus($booster->id, $booster->user_id);
		}

		return $response;
	}


	public function getRealEscrow($affiliateId) {
	
		$bonus = Bonus::where('affiliate_id', '=', $affiliateId)->first();
		if ( $bonus ) {
			return $bonus;
		}
	}


	public function getTiersByAffiliateId($affiliateId) {}


	    /**
     * *************************************************************
     * this function get affiliates groups
     * @param userId $
     * @return int
     * *************************************************************_
     */
	public function getGroupSales($affiliateId) {

	    // get the first three
	    $affiliates = Booster::where('parent_id', '=', $affiliateId)->get();
	    $firstCounts = count($affiliates);
	    $count = 0;

        foreach($affiliates as $affiliate) {
              
                $sales = Booster::descendantsOf($affiliate->id);
               
                foreach($sales as $sale) {
                	$count += 1 ;
                }
        }

	    return $count + $firstCounts; 
    }


    /**
     * [getUserBoosterSummary description]
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    public function getUserBoosterSummary($userId) {

    	$boosters = Booster::where('user_id', '=', $userId)->where('is_system', '=', 0)->get();
    	
    	$response = array();
    	foreach( $boosters as $booster ) {

    		$stats = new AffiliateStats;
    		$group_sales = $this->getGroupSales($booster->id);

    		$response[] = array(
    			'booster' => $booster->id,
    			'sales' => $group_sales,
    			'stats' => $stats->boosterSalesStats($group_sales),
    			'is_system' => $booster->is_system,
    		 	'date' => $booster->created_at
    		);
    	}

    	return $response;
    }


    /**
     * THIS FUNCTION CREATE MCC GROUP SALES
     * @param  [type] $user_id    [description]
     * @param  [type] $booster_id [description]
     * @param  [type] $spaces     [description]
     * @return [type]             [description]
     */
    public function createPersonalGroupSales($user_id, $booster_id, $spaces, $tier) {


    	$check = PersonalGroupSales::where('tier', '=', $tier)->where('booster_id', '=', $booster_id)->count();
    	if ( $check > 0 ) {
    		return false;
    	}
    	
    	for ($x = 0; $x < $spaces; $x++) {
		  	$personal_group_sales = new PersonalGroupSales;
		  	$personal_group_sales->user_id = $user_id;
		  	$personal_group_sales->booster_id = $booster_id;
		  	$personal_group_sales->tier = $tier;
		  	$personal_group_sales->save();
		}

		return true;
    }

    /**
     * *************************************************************
     * Fix Booster Matrix
     * *************************************************************
     * @return [type] [description]
     * 
     */
     public function fixBoosterMatrix() {

    	$boosters = Booster::orderBy('id', 'asc')->get();

    	$i = 0;
    	$parent = 1;

    	foreach( $boosters as $booster) {

    		if( $booster->id == 1) {
    			$parent = null;
    		}

    		$details = Booster::find($booster->id);
    		$details->parent_id = $parent;
    		$details->save();

    		if ($details->save()) {

    			if ($parent == null) {
    			  
    			   $parent = 1;
    		   
    		     } else {

    		     	$i++;

	    			if ($i == 3) {
	    				$parent++;
	    				$i = 0;
	    			}
    		     }
    		}
    	}

    	return Booster::fixTree();
    }


}


 ?>