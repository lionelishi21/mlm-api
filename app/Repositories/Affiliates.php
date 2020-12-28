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
use App\PersonalGroupSales;
use App\BoosterEbookSystem;

use App\Booster;

class Affiliates {

	protected $group;
	protected $booster;
	
	public function __construct() {
		$this->booster = new Booster;
		$this->affiliate = new Affiliate;
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
	 * *********************************************
	 * This function swtich affiliate 
	 * @param  [type] $affiliateId [description]
	 * @return [type]              [description]
	 */
	public function switchAffiliate($affiliateId, $exhangId) {

		$affiliate = $this->affiliate::find($affiliateId);
		$userId = $affiliate->user_id;


		$exchange = $this->affiliate::find($exhangId);
		$exchangeUserId = $exchange->user_id;

		$affiliate->user_id = $exchangeUserId;
		$affiliate->save();

		if ( $affiliate->save()) {
			$exchange->user_id = $userId;
			$exchange->save();

			if ( $exchange->save() ) {
				return [
					'User successfully swap'
				];
			}
		}
	}


	/**
	 * [place description]
	 * @param  [type] $group_id [descriptiono
	 * @return [type]           [description]
	 */
	public function place( $purchaser_id, $affiliate_id, $is_system = 0, $booster_id = 0) {


		$affiliate = new Affiliate;
		$affiliate->user_id = $purchaser_id;
		$affiliate->parent_id = $affiliate_id;
		$affiliate->cost = '34.95';
		$affiliate->is_system = $is_system;
		$affiliate->affiliate_id = $this->generateAffliateIDs();
		$affiliate->save();

		if ( $affiliate->save() ) {
			

			if ($is_system == 1) {
				$this->llinkSystemBooster($booster_id, $affiliate->id, $purchaser_id);
			}		

			return true;
		}
		return false;
	}


	/**
	 * Link booster to thier ebook and system purchase
	 * @return [type] [description]
	 */
	public function linkSystemBooster($booster_id, $ebook_id, $user_id) {

		$ebooksystem = new BoosterEbookSystem;
		$ebooksystem->booster_id = $booster_id;
		$ebooksystem->ebook_id = $ebook_id;
		$ebooksystem->user_id = $user_id;
		$ebooksystem->save();

		if ( $ebooksystem->save()) {
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
    	$affiliates = Affiliate::orderBy('created_at', 'desc')->with('user')->get();

    	foreach($affiliates as $affiliate) {

    		$status = 'Inactive';

    		if ($affiliate->user) {

	    	    $details = UserDetail::where('user_id', '=', $affiliate->user->id)->first();

	    	    $sales   = $this->getEbookSalesCount($affiliate->user->id);
	    	    $booster = $this->boosterPackageCount($affiliate->user->id);

	    	    if ( $sales > 2 || $booster > 0) {
	    	    	$stutus = 'Active';
	    	    }

	    		$response[] = array(
	    			'order' => $affiliate->id,
	    			'user_id' => $affiliate->user->id,
	    			'name' => $affiliate->user->first_name.' '.$affiliate->user->last_name,
	    			'children' => $affiliate['children'],
	    			'email' => $affiliate->user->email,
	    			'parent' => $affiliate->parent_id,
	    			'affiliateid' => $affiliate->affiliate_id,
	    		    'affiliate_id' => $affiliate->affiliate_id,
	    			'details' => $details,
	    			'booster' => $booster,
	    			'parent' => $this->getParentById($affiliate->affiliate_id),
	    			'sales' => $sales,
	    			'active' => $this->getAffiliateActiveStatus($affiliate->user->id),
	    			'sponsor' => $this->getSponsor($affiliate->user->id),
	    
	    		);
    		}

    	}

    	return $response;
	}

		/**
	 * [getAllAffliates description]
	 * @return [type] [description]
	 */
    public function getAllSystemPurchases() {

		$response = array();
    	$affiliates = Affiliate::orderBy('created_at', 'desc')->with('user')->get();

    	$users = User::get();
    	$response = array();

    	foreach( $users as $user) {

    		$affiliates = Affiliate::where('user_id', '=', $user->id)->get();
    		$boosters = Booster::where('user_id', '=', $user->id)->where('is_system', '=', 0)->get();
    		$booster_system_purchase = Booster::where('user_id', '=', $user->id)->where('is_system', '=', 1)->get();
    	
    		if ( count($affiliates) > 1 ) {
    			$response[] = array(
    				'id' => $user->id,
    				'name' => $user->first_name.''.$user->last_name,
    				'systems' => count($affiliates),
    				'bsystems' => count($booster_system_purchase ),
    				'booster' => count($boosters)
    			);
    		}
    	}
    	return $response;
	}

	/**
	 * ****************************************************************************************
	 * SHow user system purchases details
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function systemPurchasesDetails( $userId ) {

		$user = User::find($userId);
		$ebooks = Affiliate::where('user_id', '=', $user->id)->orderBy('id', 'desc')->get();
		$boosters = Booster::where('user_id', '=', $user->id)->where('is_system', '=', 1)->get();

		$response = array(
			'user' => $user,
			'ebook' => $ebooks,
			'booster' => $boosters,
		);

		return $response;
	}

	/**
	 * 'this fucntion give add me system packages'
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function updateEbookSystemPurchasesById($id) {

		$affiliate = Affiliate::find( $id );
		$affiliate->user_id = 1;
		$affiliate->save();

		if ( $affiliate->save() ) {
			return true;
		}

		return false;
	}
	
	/**
	 * get Affiliate active Status
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getAffiliateActiveStatus($userId) {

		if ($userId ==  1) {
			return 'system';
		}

		$booster = Booster::where('user_id', '=', $userId)->count();
		if ( $booster > 0 ) {
			return true;
		}

		$personalSales =  $this->getEbookSalesCount($userId);
		if ( $personalSales > 2 ) {
			return true;
		}

		return false;
	}

	/**
	 * [boosterPackageCount description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function boosterPackageCount($userId) {
		return Booster::where('user_id', '=', $userId, '')->count();
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
		return Purchase::where('user_id', '=', $user_id)->count();
	}


	/**
	 * [getSalesBoosterCount description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getSalesBoosterCount( $user_id ) {

		$salesCount = Purchase::where('user_id', '=', $user_id)->count();
		$boosterCount = Booster::where('user_id', '=', $user_id)->count();

		$response = array('sales' => $salesCount, 'booster' => $boosterCount);

		return $response;

	}


	/**
	 * this function all ebook sales by user id
	 * @param  [type] $user_id [description]
	 * @return [type]          [description]
	 */
	public function getEbookSales( $user_id , $type ="sales") {

		$response = array();

		if ($type == 'sales') {
			$sales = Purchase::where('sales_id', '=', $user_id)->get();
		} else {
			$sales = Purchase::where('user_id', '=', $user_id)->get();
		}

		foreach( $sales as $sale) {

			$users = new Users;
			$bitly = $users->getUserLink($sale->user_id);

			$affiliate = Affiliate::where('user_id', '=', $sale->purchase_by)->first();

			if ( $affiliate ) {
				$affiliate =  $affiliate->affiliate_id;
			} else {
				$affiliate = 1;
			}

			$response[] = array(
				'affiliate_id' => $affiliate,
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

	/**
	 * THIS FUNCTIOON GET USER AFFILIATES INFORMATION
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getUserAffiliates($userId) {

		$response = array();
		$affiliates = Affiliate::where('parent_id', '=', $userId)->get();
		$children = array();

		foreach ($affiliates as $affiliate) {

			$childs = Affiliate::where('parent_id', '=', $affiliate->id)->get();
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

		$affiliate_details = Affiliate::where('affiliate_id', '=', $id)->first();
		$userId = $affiliate_details->user_id;

		$user = User::with('detail')->find($userId);

		$affiliates = $this->getUserAffiliates($affiliate_details->id);

		$sales = $this->getEbookSales($userId);

		$users = new Users;
		$bitly = $users->getUserLink($userId);

		$stats = new AffiliateStats;

		$gsales = $this->getGroupSales($affiliate_details->id);
		$psales = PersonalGroupSales::where('user_id', '=', $userId)->count();

	    $sales_stats = $stats->salesStatus($gsales, $psales);

		$response = array(
			'user' => $user,
			'affiliate' => $affiliates,
		    'sales' => $sales,
            'bitly_link' => $bitly,
		    'personal_sales' =>$this->getEbookSales($userId, 'personal'),
            'group_sales' => $this->getGroupSales($userId),
            'boosters' => $this->getBoosterPackages($userId),
            'parent' => $this->getParentById($id),
            'stats' => $sales_stats
		);

		return $response;
	}

	/**
	 * THIS FUNCTION GET AFFILIATE STATUS BY USER ID
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getAffiliateStatusByUserId($userId) {

		$affiliateId = Affiliate::where('user_id', '=', $userId)->first()->id;

		$gsales = $this->getGroupSales($affiliateId);
		$psales = PersonalGroupSales::where('user_id', '=', $userId)->count();

		$stats = new AffiliateStats;

		return $stats->salesStatus($gsales, $psales);
	}

	/**
	 * [getAffiliateStatusName description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function getAffiliateStatusName($userId){

		$sales = $this->getEbookSalesCount($userId);

		if ($sales >= 3 AND $sales < 12 ) {
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
	public function getGroupSales($affiliateId) {


	    // get the first three
	    $affiliates = Affiliate::where('parent_id', '=', $affiliateId)->get();
	    $firstCounts = count($affiliates);
	    $count = 0;

        foreach($affiliates as $affiliate) {
               
                $sales = Affiliate::descendantsOf($affiliate->id);
                foreach($sales as $sale) {
                	$count += 1 ;
                }
        }

	    return $count + $firstCounts; 
    }


    /**
     * [totalSales description]
     * @return [type] [description]
     */
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

    	$affiliatesId = Affiliate::where('user_id', '=', $userId)->first()->id;
		$groupSales = $this->getGroupSales( $affiliatesId );
		$personalGroupSales  = PersonalGroupSales::where('user_id', '=', $userId)->count();
	
		$stats = new AffiliateStats;
		return $stats->salesStatus($groupSales, $personalGroupSales);
    }

    /**
     * this function user personal group sales
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    public function getPersonalGroupSales($userId) {
    	return PersonalGroupSales::where('user_id', '=', $userId)->count();
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


    /**
     * [updateSystemPackagesById description]
     * @param  array  $array [description]
     * @return [type]        [description]
     */
    public function updateSystemPackagesById(array $array) {

    	$affiliateId = $array['affiliate_id'];
    	
    	$affiliate = Affiliate::find($affiliateId);
    	$affiliate->user_id = 1;
    	$affiliate->save();

    	if ( $affiliate->save()) {
    		return true;
    	}

    	return false;
    }

    /**
     * [fixMatrix description]
     * @return [type] [description]
     */
    public function fixMatrix() {

    	$affiliates = Affiliate::orderBy('id', 'asc')->get();

    	$i = 0;
    	$parent = 1;
    	foreach( $affiliates as $affiliate) {


    		if($affiliate->id == 1) {
    			$parent = null;
    		}

    		$details =  Affiliate::find($affiliate->id);
    		$details->parent_id = $parent;
    		$details->save();

    		if ($details->save()) {


    			if($parent == null) {
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

    	return Affiliate::fixTree();
    }
}

 ?>
