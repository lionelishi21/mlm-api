<?php
namespace App\Repositories;

use App\Affiliate;
use App\Escrow;
use App\Purchase;
use App\UserDetail;
use Carbon\Carbon;
use App\User;
use App\Repositories\Users;
use App\Repositories\AffiliateStats;
use Illuminate\Support\Collection;

use App\Booster;

class Affiliates {

	protected $group;
	protected $booster;
	
	public function __construct() {
		$this->booster = new Booster;
	}

	/**
	 * THIS FUNCTION CREATE AFFI
	 * @param  [type] $user_id      [description]
	 * @param  [type] $affiliate_id [description]
	 * @return [type]               [description]
	 */
	public function createAffiliate($user_id, $affiliate_id) {

		$group_id = Affiliate::where('affiliate_id', '=', $affiliate_id)->first()->group_id;

		$child_group = $group_id * 3;
		$childGroups = Affiliate::where('group_id', '=', $child_group)->count();

		if ( $childGroups > 0) {

			$position = 0;
			
			foreach($childGroups as $child) {

	            $position = $child->group_id;
				$group_count = Affiliate::where('group_id', '=',  $position )->count();

				if ($group_count == $child_group){

					$position =  $child->group_id * 3;
					$groupExist = Affiliate::where('group_id', '=', $position)->first();

					if (!$groupExist) {
						$this->create($user_id, $position, $groupExist->affiliate_id);
					}

				} else {
	               $this->place($child->affiliate_id, $group_id, $user_id);
				}
			}


		} else {

			$this->create($user_id, $child_group, $affiliate_id);

		}
	}

	/**
	 * *******************************************************************
	 * THIS FUNCTION COMPRESS ALL AFAILIATES MEMBERS WHO ARE NOT QUAILIFY
	 * @return [type] [description]
	 */
	public function compression() {
	
	    $affiliates = Affiliate::orderBy('id', 'asc')->get();
	    $compression = array();

        foreach( $affiliates as $affiliate) {
        	
        	$sales = $this->getEbookSalesCount($affiliate->user_id);
        	if ($sales < 3  ||  $this->checkForBoosterByUserId == false ) {
        		// compress id is the user id 
        		$compressId = $affiliate->user_id;
        		array_push($compression, $compressId);

        	} else {
        		if ($compression) {
        			$this->moveAffliateUp($compression, $affiliate->user_id);
        		}
        	}
        }

        return $compression;
	}


	/**
	 * ****************************************************
	 * THIS FUNCTION CHECK FOUR USER BOOSTER PACKAGES
	 * @param  [type] $userId  AFFILIATE USER ID
	 * @return [type]         [description]
	 */
	public function checkForBoosterByUserId( $userId ){

		$booster =  $this->booster->where('user_id', '='. $userId)->count();

		if ( $booster < 0) {
			return false;
		}
		return true;
	}



	/**
	 * [moveAffliateUp description]
	 * @param  array  $array [description]
	 * @param  [type] $user  [description]
	 * @return [type]        [description]
	 */
	public function moveAffliateUp(array $array, $user) {

		$users = $array;
		foreach( $users as $userId) {
			
			$inactive = Affiliate::where('user_id'. '=', $userId)->first();
			$active = Affliate::where('user_id', $user)->first();

			$inactive->user_id = $user;
			$inactive->update();

			if ($inactive->update()) {
				$active->user_id = $userId;
				$active->update();
			}
		}
	}


	/**
	 * [createNewGroup description]
	 * @return [type] [description]
	 */
	public function createNewGroupAffiliate() {


	}

	/**
	 * [place description]
	 * @param  [type] $group_id [descriptiono
	 * @return [type]           [description]
	 */
	public function place( $purchaser_id, $affiliate_id, $cost) {


		$affiliate = new Affiliate;
		$affiliate->user_id = $purchaser_id;
		$affiliate->parent_id = $affiliate_id;
		$affiliate->cost = $cost;
		$affiliate->affiliate_id = $this->generateAffliateIDs();
		$affiliate->save();

		if ( $affiliate->save() ) {
           // Cash bonus trigger should go here

			return true;
		}
		return false;
	}


	/**
	 * [getGroupId description]
	 * @return [type] [description]
	 */
	public function getGroupId($id) {

		$groupId = Affiliate::where('affiliate_id', '=', $id)->first()->group_id;

		$count = Affiliate::where('group_id', '=', $groupId)->count();
		if ($count >= 12){

		}

	}

	/**
	 * [generateAffliateIDs description]
	 * @return [type] [description]
	 */
	public function generateAffliateIDs() {
		// $latestAf = Affiliate::orderBy('created_at', 'desc')->first();
		// $now = Carbon::now()->toDateString();
		
		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$res = "";
		for ($i = 0; $i < 12; $i++) {

		    if ($i == 4) {
		        $res .= '-';
            }

            if ($i == 8) {
                $res .= '-';
            }

		    $res .= $chars[mt_rand(0, strlen($chars)-1)];
		}
	    return $res;
	}

	/**
	 * [create description]
	 * @param  [type] $user_id  [description]
	 * @param  [type] $group    [description]
	 * @param  [type] $parentId [description]
	 * @return [type]           [description]
	 */
	public function create($user_id, $group, $parentId) {

		$latestAf = Affiliate::orderBy('created_at', 'desc')->first();
	    $affiliateId = str_pad($latestAf->id + 1, 8, "0", STR_PAD_LEFT);

		$newAffiliates = new Affiliate;
		$newAffiliates->user_id = $user_id;
		$newAffiliates->parent_id = $parentId;
		$newAffiliates->affiliate_id = $affiliateId;
		$newAffiliates->group_id = $group;
		$newAffiliates->save();
	}

	/**
	 * [getAllAffliates description]
	 * @return [type] [description]
	 */
	public function getAllAffliates() {

		$response = array();
    	$affiliates = Affiliate::orderBy('created_at', 'desc')->with('children')->get();

    	foreach($affiliates as $affiliate) {

    	    $details = UserDetail::where('user_id', '=', $affiliate->user->id)->first();

    		$response[] = array(

    			'order' => $affiliate->id,
    			'user_id' => $affiliate->user->id,
    			'name' => $affiliate->user->first_name.' '.$affiliate->user->last_name,
    			'children' => $affiliate['children'],
    			'email' => $affiliate->user->email,
    			'parent' => $affiliate->parent_id,
    			'affiliate_id' => $affiliate->affiliate_id,
    			'details' => $details,
    			'parent' => $this->getParentById($affiliate->affiliate_id),
    			'sales' => $this->getEbookSalesCount($affiliate->user->id),
    			'status' => $this->getAffiliateStatusName($affiliate->user->id),
    			'sponsor' => $this->getSponsor($affiliate->user->id),
    			
    			
    		);
    	}

    	return $response;
	}


	/**
	 * GEt user that sponsor sale
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getSponsor($userId) {

		$purchase = Purchase::where('purchase_by', '=', $userId)->first();

		if ( $purchase ) {
			return User::find($purchase->user_id);
		}

		return User::find(1);
	}

	/**
	 * [getParentById description]
	 * @param  [type] $affiliateId [description]
	 * @return [type]              [description]
	 */
	public function getParentById($affiliateId) {

		$response = array();

		$affiliate = Affiliate::where('affiliate_id', '=', $affiliateId)->first();
		if ( $affiliate ) {
			$response = array('user' => User::find($affiliate->parent_id), 'affilaite' => $affiliate);
		}

		return $response = array('user' => User::find(1), 'affilaite' => Affiliate::find(1));;
	}

	/**
	 * thos function get ebook sales
	 * @param  [type] $user_id [description]
	 * @return [type]          [description]
	 */
	public function getEbookSalesCount($user_id) {
		$salesCount = Purchase::where('user_id', '=', $user_id)->count();
		return $salesCount;
	}

	/**
	 * this function all ebook sales by user id
	 * @param  [type] $user_id [description]
	 * @return [type]          [description]
	 */
	public function getEbookSales( $user_id , $type="sales") {

		$response = array();

		if ($type == 'sales') {
			$sales = Purchase::where('sales_id', '=', $user_id)->get();
		} else {
			$sales = Purchase::where('user_id', '=', $user_id)->get();
		}

		foreach( $sales as $sale) {

			$users = new Users;
			$bitly = $users->getUserLink($sale->user_id);

			$response[] = array(
				'affiliate_id' => Affiliate::where('user_id', '=', $sale->purchase_by)->first()->affiliate_id,
				'purchaser_id' => $sale->purchase_by,
				'purchaser_name' => $sale->purchaser->first_name.' '.$sale->purchaser->last_name,
				'seller_id' => $sale->user_id,
				'assigned_sale_id' => $sale->sales_id,
				'assigned_sale_name' => $sale->seller->first_name.' '.$sale->seller->last_name,
				'date' => Carbon::parse($sale->created_at)->toDayDateTimeString(),
				'link' => $bitly

			);
		}

		return $response;
	}

	public function getUserAffiliates($userId) {

		$response = array();
		$affiliates = Affiliate::where('parent_id', '=', $userId)->get();
		$children = array();

		foreach ($affiliates as $affiliate) {

			$childs = Affiliate::where('parent_id', '=', $affiliate->user_id)->get();
			$response1 = array();

			foreach($childs as $child) {
				$response1[] = array(
					 'id' => $child->id, 
					 'name' => $child->user->first_name.' '.$child->user->last_name,
					 'affiliateId' => $child->affiliate_id,
				);
			}

			$response[] = array(
				'username' => $affiliate->user->first_name.' '.$affiliate->user->last_name,
				'user_id' => $affiliate->user_id,
				'affiliateId' => $affiliate->affiliate_id,
				'children' => $response1 
			);


		}
		return $response;
	}

	/**
	 * [getAffiliatesDetails description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getAffiliatesDetails($id) {

		$response = array();

		$userId = Affiliate::where('affiliate_id', '=', $id)->first()->user_id;
		$user = User::with('detail')->find($userId);

		$affiliates = $this->getUserAffiliates($userId);

		$sales = $this->getEbookSales($userId);

		$users = new Users;
		$bitly = $users->getUserLink($userId);

		$stats = new AffiliateStats;

		$response = array(
			'user' => $user,
			'affiliate' => $affiliates,
		    'sales' => $sales,
            'bitly_link' => $bitly,
		    'personal_sales' =>$this->getEbookSales($userId, 'personal'),
            'group_sales' => $this->getGroupSales($userId),
            'boosters' => $this->getBoosterPackages($userId),
            'parent' => $this->getParentById($id),
            'stats' => $stats->salesStatus($this->getGroupSales($userId))
		);

		return $response;
	}

	/**
	 * [getAffiliateStatusName description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getAffiliateStatusName($userId){

		$sales = $this->getEbookSalesCount($userId);

		if ($sales >= 3 AND $sales < 12) {
			return 'Active';
		}

		if ($sales >= 12 AND $sales < 36  ) {
			return 'Bronze';
		}

		if ($sales >= 36  AND $sales < 108) {
			return 'Silver';
		}

		if ($sales >= 108 AND $sales < 324 ){
			return 'Gold';
		}

		if ($sales >= 324 AND $sales < 927 ) {
			return 'Ruby';
		}

		if ($sales >= 927 ) {
			return 'Diamond';
		}

		return 'Inactive';
	}

    /**
     * *************************************************************
     * this function get affiliates groups
     * @param userId $
     * @return int
     * *************************************************************
     */
	public function getGroupSales($userId) {

		$userAffiliateId = Affiliate::where('user_id', '=', $userId)->first();

	    // get the first three
	    $affiliates = Affiliate::where('parent_id', '=', $userAffiliateId->id)->get();
	    $firstCounts = count($affiliates);
	    $count = 0;

        foreach($affiliates as $affiliate) {
                // $sales = Affiliate::descendantsOf($affiliate->user_id);
                $sales = Affiliate::descendantsOf($affiliate->id);
                foreach($sales as $sale) {
                	$count += 1 ;
                }
        }
        
	    return $count + $firstCounts; 
    }





    public function totalSales() {

    	$affiliates = Affiliate::get();
    	$cals = 0;
    	
    	foreach( $affiliates as $affiliate) {
    		$cals += $affiliate->cost;
    	}

    	return number_format($cals, 2);
    }

    /**
     * 
     */
    public function getSalesPercentage($userId) {

		$cals = 1;
		$position = 0;
		$trigger = 0;
		$sale_status = '';
		$color_indication = '#cd7f32';



		$groupSales = $this->getGroupSales($userId);
		$depth = Affiliate::withDepth()->where('user_id', '=', $userId)->first()->depth;


		if ( $groupSales <= 314.55) {

			for( $i = 1; $i < $depth; $i++ ){
				$cals = $cals * 3;
			}

			$trigger = $cals * 314.55;
			$total_sales = $this->totalSales();
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$color_indication = '#cd7f32';
		}

	
		if ( $groupSales > 314.55  && $groupSales <= 1930.95) {

			for( $i = 1; $i < $depth; $i++ ){
				$cals = $cals * 3;
			}

			$trigger = $cals *  1930.95;
			$total_sales = $this->totalSales();
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'silver';
			$color_indication = '#bfbfbf';

		}
			


		if ( $groupSales > 1930.95  &&  $groupSales <=  8178.55 ) {

			for( $i = 1; $i < $depth; $i++ ){
				$cals = $cals * 3;
			}

			$trigger = $cals *  8178.55;
			$total_sales = $this->totalSales();
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'gold';
			$color_indication = '#FFD700';
		}



		if ( $groupSales > 8178.55 && $groupSales <=  951606.95 ) {

			for( $i = 1; $i < $depth; $i++ ){
				$cals = $cals * 3;
			}

			$trigger = $cals *  951606.95;
			$total_sales = $this->totalSales();
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'ruby';
			$color_indication = '#e0115f';
		}


		if ( $groupSales > 951606.95 && $groupSales >=  1903212.9) {

			for( $i = 1; $i < $depth; $i++ ){
				$cals = $cals * 3;
			}

			$trigger = $cals * 1903212.9;
			$total_sales = $this->totalSales();
			$position =  (  (float)$total_sales /  (float)$trigger ) * 100;
			$position = number_format((float)$position, 2, '.', ''); 
			$sale_status = 'diamond';
			$color_indication = '#b9f2ff';

		}

		 $response = array(
        	'group_sales' => $groupSales,
        	'level' => Affiliate::withDepth()->where('user_id', '=', $userId)->first()->depth,
        	'position' => $position,
        	'total_sales' => $total_sales,
        	'trigger' => $trigger,
        	'status' => $sale_status,
        	'color' => $color_indication
         );

		 return $response;
    }

    /**
     * calculate the amount received
     * @param $amount
     * @return float
     */
    public function CalculateAmountRecieved($amount, $userId, $tier) {

        $escrow = Escrow::where('user_id', '=', $userId)->where('tier', '=', $tier)->first();

        if (!$escrow) {
            $totalAmount = $amount - 3;
            return $totalAmount * 34.95;
        }

        if ($escrow->tier == 'Bronze') {
            $totalAmount = $escrow->escrow * 9;
            return $totalAmount;
        }

        if ($escrow->tier == 'Silver') {
            $totalAmount = $escrow->escrow * 9;
            return $totalAmount;
        }

        if ($escrow->tier == 'Gold') {
            $totalAmount = $escrow->escrow * 9;
            return $totalAmount;
        }

        if ( $escrow ->tier == 'Ruby') {
            $totalAmount = $escrow->escrow * 9;
            return $totalAmount;
        }

        if ( $escrow->tier == 'Diamond') {

            $totalAmount = $escrow->escrow * 9;
            return $totalAmount;
        }

        if ( $escrow->tier == 'Diamond') {

            $totalAmount = $escrow->escrow * 9;
            return $totalAmount;
        }


    }

    /**
     * this function get escrow by tiers
     * @param $userId
     * @param $tier
     * @return bool
     */
    public function getEscrowByTier($userId, $tier) {

        $escrow = Escrow::where('user_id', '=', $userId)->where('tier', '=', $tier)->first();
        if ( isset ( $escrow )) {
            return $escrow;
        }

        return false;
    }

    /**
     * this functioon get escrow
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    public function escrow($userId) {

	    $descendants = Affiliate::descendantsOf($userId);
	    $descendantsAmount = count($descendants);

	    if ($descendantsAmount == 12) {

	        $escrow = new Escrow;
	        $escrow->tier = 'Bronze';
	        $escrow->user_id = $userId;
	        $escrow->pf = 34.95;
	        $escrow->sales = 12;
	        $escrow->cash_bonus = 100.00;
	        $escrow->amount_recieved = $this->CalculateAmountRecieved($descendantsAmount, $userId, 'Bronze');
	        $escrow->escrow = $this->CalculateAmountRecieved($descendantsAmount) - 100.00;
            $escrow->save();

            if ( $escrow->save()) {
                return true;
            }
        }

	    if ( $descendantsAmount == 108) {
            $escrow = new Escrow;
            $escrow->user_id = $userId;
            $escrow->tier = 'Silver';
            $escrow->pf = $this->getEscrowByTier($userId, 'Silver');
            $escrow->sales = 108;
            $escrow->cash_bonus = 600.00;
            $escrow->amount_recieved = $this->CalculateAmountRecieved($descendantsAmount);
            $escrow->escrow = $this->CalculateAmountRecieved($descendantsAmount) - 3800.00;
            $escrow->save();
        }

        if ( $descendantsAmount == 324) {

            $escrow = new Escrow;
            $escrow->user_id = $userId;
            $escrow->tier = 'Gold';
            $escrow->pf = $this->getEscrowByTier($userId, 'Gold');
            $escrow->sales = 324;
            $escrow->cash_bonus = 3800.00;
            $escrow->amount_recieved = $this->CalculateAmountRecieved($descendantsAmount);
            $escrow->escrow = $this->CalculateAmountRecieved($descendantsAmount) - 22000.00;
            $escrow->save();

        }

	    if ( $descendantsAmount == 972) {

	         $escrow = new Escrow;
	         $escrow->user_id = $userId;
	         $escrow->tier = 'Ruby';
	         $escrow->pf = $this->getEscrowByTier($userId, 'Ruby');
	         $escrow->sales = 972;
	         $escrow->cash_bonus = 22000.00;
	         $escrow->amount_recieved = $this->CalculateAmountRecieved($descendantsAmount);
	         $escrow->escrow = $this->CalculateAmountRecieved($descendantsAmount) - 22000.00;
	         $escrow->save();
	    }

        if ( $descendantsAmount == 11664) {

             $escrow = new Escrow;
             $escrow->user_id = $userId;
             $escrow->tier = 'Diamond';
             $escrow->pf = $this->getEscrowByTier($userId, 'Diamond');
             $escrow->sales = 972;
             $escrow->cash_bonus = 22000.00;
             $escrow->amount_recieved = $this->CalculateAmountRecieved($descendantsAmount);
             $escrow->escrow = $this->CalculateAmountRecieved($descendantsAmount) - 22000.00;
             $escrow->save();
        }
    }

    /**
     * new wscrow func
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    public function newEscrow($userId) {}

    /**
     * This function create escrow for roh
     * @param  [type] $amount [description]
     * @return [type]         [description]
     */
    public function createBoosterPayout($amount, $userId, $tier) {

    	if ( $amount = 400.00 ) {
    		
    		$check = Escrow::where('user_id','=', $userId)
    		->where('tier', '=', $tier )->count();

    		if ($check > 0) {
    			return;
    		}

	        $escrow = new Escrow;
	        $escrow->tier = $tier;
	        $escrow->user_id = $userId;
	        $escrow->pf =  00;
	        $escrow->sales = 00;
	        $escrow->cash_bonus = $amount;
	        $escrow->amount_recieved = 00;
	        $escrow->escrow = 00;
            $escrow->save();
    	}

    	if ( $amount = 4000.00 ) {
    		
    		$check = Escrow::where('user_id','=', $userId)
    		->where('tier', '=', $tier)->count();

    		if ($check > 0) {
    			return;
    		}

	        $escrow = new Escrow;
	        $escrow->tier = $tier;
	        $escrow->user_id = $userId;
	        $escrow->pf =  00;
	        $escrow->sales = 00;
	        $escrow->cash_bonus = $amount;
	        $escrow->amount_recieved = 00;
	        $escrow->escrow = 00;
            $escrow->save();
    	}

    	if ( $amount = 10600.00 ) {

    		$check = Escrow::where('user_id','=', $userId)
    	     ->where('tier', '=', $tier)->count();

    		if ($check > 0) {
    			return;
    		}

	        $escrow = new Escrow;
	        $escrow->tier = $tier;
	        $escrow->user_id = $userId;
	        $escrow->pf =  00;
	        $escrow->sales = 00;
	        $escrow->cash_bonus = $amount;
	        $escrow->amount_recieved = 00;
	        $escrow->escrow = 00;
            $escrow->save();
    	}
    }


    /**
     * ************************************************************************
     * THIS FUNCTION GET AFFILIATE BOOSTER PACKAGES
     * ************************************************************************
     * @param  [type] $userId [description]
     * @return [type]         [description]
     * ************************************************************************
     */
     public function getBoosterPackages($userId) {
    	$boosters = $this->booster->where('user_id', '=', $userId)->where('is_system', '=', 0)->get();
    	return count( $boosters );
    }


    /**
     * [getParentAffiliates description]
     * @param  [type] $parentId [description]
     * @return [type]           [description]
     */
    public function getParentAffiliates($parentId) {
        return Affiliate::where('parent_id', '=', $parentId)->get()->toArray();
    }	


    /**
     * [removeAffiliate description]
     * @param  [type] $affiliateId [description]
     * @return [type]              [description]
     */
    public function removeAffiliate($affiliateId) {}

    /**
     * [parentAndChild description]
     * @param  [type] $parentId [description]
     * @return [type]           [description]
     */
    public function parentAndChild($parentId) {}

    /**
     * ***********************************************************************
     * @param $affiliateId
     * @return mixed
     * **********************************************************************
     */
    public function userAffiliateCount($affiliateId){
	    return Affiliate::where('parent_id', '=', $affiliateId)->count();
    }
}

 ?>
