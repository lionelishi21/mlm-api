<?php 
namespace App\Repositories;

use App\Rayofhope;
use App\User;

class Rayhope {

	protected $rayofhope;

	public function __construct() {
		$this->rayofhope = new Rayofhope;
	}

	/**
	 * ****************************************************************************
	 * THIS FUNCTION GET AFFILIATE DETAILS 										  *
	 * ****************************************************************************
	 * @param  [type] $id [description]											  *
	 * @return [type]     [description]											  *
	 * ****************************************************************************
	 */
	public function getDetailsById($id) {

		$affiliate = $this->rayofhope->find($id);
		
		$members = $this->getChildrent($id);
		$escrow = $this->getEscrow($id);

		$user = User::find( $affiliate->user_id );

		$response = array(
			'members' =>  $members,
			'name' => $user->first_name.' '.$user->last_name,
			'email' => $user->first_email,
			'escrow' => $escrow,
			'sales_count' => $this->getGroupSalesCount($affiliate->id),
			'percentage' => $this->getSalesPercentage($affiliate->id)
		);

		return $response;
	}
	
	

	public function getEscrow($id) {
		
		$total = 0;
		$affiliates = Rayofhope::with('user')->where('parent_id', '=', $id)->get();
		
		foreach($affiliates as $affiliate) {
			$total += $this->getGroupSales($affiliate->id);
		}

		return $total;
	}


	/**
	 * *******************************************************************************
	 * THIS FUNCTION GET CHILDRENTS OF PARENT
	 * *******************************************************************************
	 * @param  [type] $parent_id [description]
	 * @return [type]            [description]
	 * ******************************************************************************
	 */
	public function getChildrent($id) {

		$response = array();
		$affiliates = Rayofhope::with('user')->where('parent_id', '=', $id)->get();

		Rayofhope::fixTree();

		foreach($affiliates as $affiliate) {

			$user = User::find( $affiliate->user_id );
			
			$response[] = array(
				'id' => $affiliate->id,
				'name' => $user->first_name.' '.$user->last_name,
				'email' => $user->email,
				'children' => $this->getGrandchild($affiliate->id),
				'escrow' => $this->getGroupSales($affiliate->id), 
				'sales_count' => $this->getGroupSalesCount($affiliate->id),
				'percentage' => $this->getSalesPercentage($affiliate->id)
			);
		}
		return $response;
	}


	/**
	 * [totalSales description]
	 * @return [type] [description]
	 */
	public function totalSales() {

    	$affiliates = Rayofhope::get();
    	$cals = 0;
    	
    	foreach( $affiliates as $affiliate) {
    		$cals += $affiliate->cost;
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

		$depth = Rayofhope::withDepth()->where('id', '=', $affiliateId)->first()->depth;

		if ( $groupSales <= 50.00 ) {

			for( $i = 1; $i < $depth; $i++ ){
				$cals = $cals * 2;
			}

			$trigger = $cals * 50.00;
			$total_sales = $totalSales;
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'tier 1';
		}

		if ( $groupSales > 50.0 && $groupSales <= 175.00 ) {

			$trigger = $cals * 175.00;
			$total_sales = $totalSales;
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'tier 2';
		}

		if ( $groupSales > 175.00 && $groupSales <= 1300.00 ) {

			$trigger = $cals * 1300.00;
			$total_sales = $totalSales;
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'tier 3';
		}

		if ( $groupSales > 1300.00 && $groupSales <= 20800.00 ) {

			$trigger = $cals * 20800.00;
			$total_sales = $totalSales;
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'tier 4';
		}

			$response = array(
        	'group_sales' => $this->getGroupSales($affiliateId),
        	'level' => Rayofhope::withDepth()->where('id', '=', $affiliateId)->first()->depth,
        	'position' => $position,
        	'total_sales' => $total_sales,
        	'trigger' => $trigger,
        	'status' => $sale_status,
         );

		 return $response;

	}

	/**
	 * [getGrandchild description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getGrandchild($id) {
		
		$response = array();
		$affiliates = Rayofhope::with('user')->where('parent_id', '=', $id)->get();
		
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
	 * ****************************************************************
	 * Place user in the Next available sport
	 * @return [type] [description]
	 * ****************************************************************
	 */
	public function nextAvailableSpot() {

		$affiliates = $this->rayofhope->orderBy('id', 'asc')->get();
		foreach( $affiliates as $aff) {
			$count = $this->getMatrixCount($aff->id);
			if ($count < 2) {
				return $aff->id;
				break;
			}
		}
	}


	/**
	 * **********************************************************
	 * Create USer Affliate by user id
	 * @param  [type] $user_id    [description]
	 * @param  [type] $inviter_id [description]
	 * @return [type]             [description]
	 * **********************************************************
	 */
	public function createAffiliate($user_id, $qty ) {

		for($i = 0; $i < $qty; $i++) {
		
			$affiliate = new Rayofhope;
			$affiliate->parent_id = $this->nextAvailableSpot();
			$affiliate->user_id = $user_id;
			$affiliate->save();
		}

		return $affiliate;
	}


	/**
	 * [getMatrixCount description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getMatrixCount($userId) {
		return $this->rayofhope->where('parent_id', '=', $userId)->count();
	}

	   /**
     * *************************************************************
     * this function get affiliates groups
     * @param userId $
     * @return int
     * *************************************************************
     */
	public function getGroupSales($affiliateId) {

	    // get the first three
	    $affiliates = $this->rayofhope::where('parent_id', '=', $affiliateId)->get();
	    $firstCounts = count($affiliates);
	    $count = 0;

	    $response = array();
        foreach($affiliates as $affiliate) {

        		$cost = 0;
                $escrows = Rayofhope::descendantsOf($affiliate->id);

                foreach( $escrows as $escrow ) {
                	$cost += $escrow->cost;
                 }
                $count +=  $cost ;
        }

	    return $count; 
    }


    public function getGroupSalesCount($affiliateId) {

    	   // get the first three
	    $affiliates = $this->rayofhope::where('parent_id', '=', $affiliateId)->get();
	    $firstCounts = count($affiliates);
	    $count = 0;

        foreach($affiliates as $affiliate) {

        		$cost = 0;
                $escrows = Rayofhope::descendantsOf($affiliate->id);
                $count += count($escrows);
        }

	    return $count; 
    }


    /**
	 * get all affiliates members 
	 * @return [type] [description]
	 */
	public function getAllMembers(array $array) {
		$affiliates = $this->rayofhope->with('user')->get();
		return $affiliates;
	}




}

 ?>