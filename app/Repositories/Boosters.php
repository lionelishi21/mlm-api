<?php 
namespace App\Repositories;

use App\Repositories\Purchases;
use App\Repositories\Affiliates;
use App\Booster;
use App\Bonus;
use App\User;
use DB;

class Boosters {

	protected $booster;
	protected $affiliate;
	protected $user;

	public function __construct() {
		$this->booster = new Booster;
		$this->affiliates = new Affiliates;
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
			'percentage' => $this->getSalesPercentage($id)
		);

		// $allboosters = $this->booster->get();

		// foreach( $allboosters as $boost) {
		// 	$cash = $this->triggerCashbonus($boost->id, $boost->user_id);
		// }

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

	public function getChildren( $id ) {

		$response = array();
		$boosters = $this->booster->with('user', 'bonus')->where('parent_id', '=', $id )->get();

		// Booster::fixTree();

		foreach( $boosters as $booster) {

			$user = $this->user->find( $booster->user_id );
			$response[] = array(

				'id' => $booster->id,
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
					$cash = $this->triggerCashbonus($booster->id, $booster->user_id);
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
	public function triggerCashbonus( $affiliateId, $userId ) {

		$sales = $this->getGroupSales( $affiliateId );
		$escrow = $this->getPayitForwadAmount( $affiliateId );

		if ( $sales  >= 225.00 && $sales < 1395.00) {

			$c_bonus = Bonus::where('affiliate_id', '=', $affiliateId)->first();
			if ( $c_bonus ) {
				return;
			}

			$twospaces = 70.00;
			$scrow  =  $sales - $twospaces;

			$bonus = new Bonus;
			$bonus->affiliate_id = $affiliateId;
			$bonus->amount = 225.00;
			$bonus->escrow = $scrow;
			$bonus->save();

			if ( $bonus->save() ) {

				$spaces = $this->createMccSpaces($userId, $twospaces);

				return [
					'space' => $spaces,
					'status' => true
				];
			}
		}

		
		if ($escrow >= 1395.00 && $escrow < 6615.00) {
			
			$bonus_check = Bonus::where('affiliate_id', '=', $affiliateId)->where('escrow', '=', 735 )->count();
			if ( $bonus_check> 0) {
				return;
			}

			//Creste Cash bonues
			$cashbonus =  400.00;
			$create_cash_bonus = $this->affiliates->createBoosterPayout($cashbonus, $userId, 'tier 2');


			//create mcc space
			$mcc_spaces = 210.00;
			$spaces = $this->createMccSpaces($userId, $mcc_spaces);


			//create system packages 
			$system_qty = 2;
			$system_purchases = $this->createBooster($userId, $system_qty, $sys = 1);
			

			// update userescrow
			$cash = Bonus::where('affiliate_id', '=', $affiliateId)->first();
			if ( $cash ) {

				$cash->amount = 1395;
				$cash->escrow = 735;
				$cash->save();
			}
		
		}

		if ( $escrow >= 6615.00 && $escrow < 16560.00 ) {

			$bonus_check = Bonus::where('affiliate_id', '=', $affiliateId)->where('escrow', '=', 1840 )->count();
			if ( $bonus_check > 0) {
				return;
			}

			//Creste Cash bonues
			$cashbonus =  4000.00;
			$create_cash_bonus = $this->affiliates->createBoosterPayout($cashbonus, $userId, 'tier 3');


			//create mcc space
			$mcc_spaces = 700.00;
			$spaces = $this->createMccSpaces($userId, $mcc_spaces);


			//create system packages 
			$system_qty = 3;
			$system_purchases = $this->createBooster($userId, $system_qty, $sys = 1);
			

			// update userescrow
			$cash = Bonus::where('affiliate_id', '=', $affiliateId)->first();
			$cash->amount = 6615;
			$cash->escrow = 1840;
			$cash->save();
		}


		if ( $escrow >= 16560.00 ) {

			$bonus_check = Bonus::where('affiliate_id', '=', $affiliateId)->where('escrow', '=', 400 )->count();
			if ( $bonus_check > 0) {
				return;
			}

			//Creste Cash bonues
			$cashbonus =  10600.00;
			$create_cash_bonus = $this->affiliates->createBoosterPayout($cashbonus, $userId, 'tier 4');


			//create mcc space
			$mcc_spaces = 3500.00;
			$spaces = $this->createMccSpaces($userId, $mcc_spaces);


			//create system packages 
			$system_qty = 5;
			$system_purchases = $this->createBooster($userId, $system_qty, $sys = 1);
			

			// update userescrow
			$cash = Bonus::where('affiliate_id', '=', $affiliateId)->first();
			$cash->amount = 16560;
			$cash->escrow = 400;
			$cash->save();
		}
	}


	public function createSystemPackages() {

	}




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
	public function createMccSpaces($userId, $cost) {
		$purchase = new Purchases;
		$purchase->createMccSystemPackages($userId, $cost);
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
       
	    return $count; 
	}

	/**
	 * THIS FUNCTL GET ALL BOOSTER PACKAGES
	 * @param  array  $array [description]
	 * @return [type]        [description]
	 */
	public function getAllMembers(array $array) {
	


		$affiliates = $this->booster->with('bonus')->get();
		
		$response = array();
		$affiliate = array();
		
		foreach($affiliates as $affil) {

			// if (in_array($affil->user_id, $affiliate) )  {
			
			// } else {
               
               	$user = User::find($affil->user_id);

				$response[] = array(
					'id'     => $affil->id,
					'cost'   => $affil->cost,
					'name'   => $user->first_name.' '.$user->last_name,
					'email'  => $user->email,
					'escrow' => $this->getRealEscrow($affil->id),
					'is_system' => $affil->is_system,
					// 'escrow' => $this->getGroupSales($affil->id), 
					// 'tiers' => $this->getTiersByAffiliateId($affil->id),
					'boosters' =>  count(Booster::where('user_id', '=', $affil->user_id)->get())
				);

				$affiliate[] = $affil->user_id;
            // }

		}

		$allboosters = $this->booster->get();
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
     * *************************************************************
     */
	public function getGroupSales($affiliateId) {

	    // get the first three
	    $affiliates = Booster::where('parent_id', '=', $affiliateId)->get();
	    $firstCounts = count($affiliates);
	    $count = 0;

        foreach($affiliates as $affiliate) {
                // $sales = Affiliate::descendantsOf($affiliate->user_id);
                $sales = Booster::descendantsOf($affiliate->id);
                foreach($sales as $sale) {
                	$count += $sale->cost ;
                }
        }

	    return number_format( $count, 2); 
    }

}


 ?>