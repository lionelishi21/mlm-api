<?php
namespace App\Repositories;

use App\Affiliate;
use App\Escrow;
use App\Purchase;
use App\UserDetail;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Collection;

class Affiliates {

	protected $group;

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
	 * [compression description]
	 * @return [type] [description]
	 */
	public function compression() {
	
	    $affiliates = Affiliate::orderBy('id', 'asc')->get();
	    $compression = array();

        foreach( $affiliates as $affiliate) {
        	
        	$sales = $this->getEbookSalesCount($affiliate->user_id);
        	if ($sales < 3 ) {
        		// compress id is the user id 
        		$compressId = $affiliate->user_id;
        		array_push($compression, $compressId);

        	} else {

        		if ($compression) {
        			$this->moveAffliateUp($compression, $affiliate->user_id);
        		}
        		
        	}
       
        }
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
	 * @param  [type] $group_id [description]
	 * @return [type]           [description]
	 */
	public function place( $purchaser_id, $affiliate_id) {


		$affiliate = new Affiliate;
		$affiliate->user_id = $purchaser_id;
		$affiliate->parent_id = $affiliate_id;
		$affiliate->affiliate_id = $this->generateAffliateIDs();
		$affiliate->save();


		if ( $affiliate->save() ) {
            // $parent = Affiliate::find($affiliate_id);
            // $child = Affiliate::find($purchaser_id);
            // $parent->appendNode($child);
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
    			'sponsor' => $this->getSponsor($affiliate->user->id)
    			
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

			$response[] = array(
				'affiliate_id' => Affiliate::where('user_id', '=', $sale->user_id)->first()->affiliate_id,
				'purchaser_id' => $sale->purchase_by,
				'purchaser_name' => $sale->purchaser->first_name.' '.$sale->purchaser->last_name,
				'seller_id' => $sale->user_id,
				'assigned_sale_id' => $sale->sales_id,
				'assigned_sale_name' => $sale->seller->first_name.' '.$sale->seller->last_name,
				'date' => Carbon::parse($sale->created_at)->toDayDateTimeString(),

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

		$response = array(
			'user' => $user,
			'affiliate' => $affiliates,
		    'sales' => $sales,
            'bitly_link' => $bitly,
		    'personal_sales' =>$this->getEbookSales($userId, 'personal'),
            'group_sales_counts' => $this->getGroupSales($userId),
            'parent' => $this->getParentById($id)
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

	    // get the first three
	    $affiliates = Affiliate::with('allChildren')->where('parent_id', '=', $userId)->get();
	    $firstCounts = count($affiliates);
	    $count = 0;

        foreach($affiliates as $affiliate) {
                $affiliate = Affiliate::descendantsOf($affiliate->user_id);
                $count += count($affiliate );
        }

	    return $count +  $firstCounts; 
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

	    if ($descendantsAmount == 36) {

	        $escrow = new Escrow;
	        $escrow->user_id = $userId;
	        $escrow->tier = 'Silver';
	        $escrow->pf = $this->getEscrowByTier($userId, 'Silver');
	        $escrow->sales = 36;
	        $escrow->cash_bonus = 600.00;
	        $escrow->amount_recieved = $this->CalculateAmountRecieved($descendantsAmount);
	        $escrow->escrow = $this->CalculateAmountRecieved($descendantsAmount) - 600;
        }

	    if ( $descendantsAmount == 108) {
            $escrow = new Escrow;
            $escrow->user_id = $userId;
            $escrow->tier = 'Gold';
            $escrow->pf = $this->getEscrowByTier($userId, 'Gold');
            $escrow->sales = 108;
            $escrow->cash_bonus = 3800.00;
            $escrow->amount_recieved = $this->CalculateAmountRecieved($descendantsAmount);
            $escrow->escrow = $this->CalculateAmountRecieved($descendantsAmount) - 3800.00;
            $escrow->save();
        }

        if ( $descendantsAmount == 324) {

            $escrow = new Escrow;
            $escrow->user_id = $userId;
            $escrow->tier = 'Ruby';
            $escrow->pf = $this->getEscrowByTier($userId, 'Ruby');
            $escrow->sales = 324;
            $escrow->cash_bonus = 22000.00;
            $escrow->amount_recieved = $this->CalculateAmountRecieved($descendantsAmount);
            $escrow->escrow = $this->CalculateAmountRecieved($descendantsAmount) - 22000.00;
            $escrow->save();

        }

         if ( $descendantsAmount == 972) {

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
    public function removeAffiliate($affiliateId) {
    }

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
