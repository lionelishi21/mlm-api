<?php 
namespace App\Repositories;

use App\Affiliate;
use App\Purchase;
use Carbon\Carbon;
use App\User;

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
		$affiliate->group_id = $affiliate_id;
		$affiliate->save();
		
		if ( $affiliate->save() ) {
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
		for ($i = 0; $i < 10; $i++) {
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
    	$affiliates = Affiliate::orderBy('created_at', 'desc')->get();

    	foreach($affiliates as $affiliate) {

    		$response[] = array(
    			'user_id' => $affiliate->user->id,
    			'name' => $affiliate->user->first_name.' '.$affiliate->user->last_name,
    			'email' => $affiliate->user->email,
    			'affiliate_id' => $affiliate->affiliate_id,
    			'sales' => $this->getEbookSalesCount($affiliate->user->id),
    			'status' => $this->getAffiliateStatusName($affiliate->user->id)
    		);
    	}

    	return $response;
	}

	/**
	 * thos function get ebook sales
	 * @param  [type] $user_id [description]
	 * @return [type]          [description]
	 */
	public function getEbookSalesCount($user_id) {
		$salesCount = Purchase::where('sales_id', '=', $user_id)->count();
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
				'date' => Carbon::parse($sale->created_at)->toFormattedDateString()
			);
		}

		return $response;
	}

	public function getUserAffiliates($userId) {

		$response = array();
		$affiliates = Affiliate::where('parent_id', '=', $userId)->get();
		foreach($affiliates as $affiliate) {

			$response[] = array(
				'username' => $affiliate->user->first_name.' '.$affiliate->user->last_name,
				'user_id' => $affiliate->user_id,
				'affiliateId' => $affiliate->affiliate_id
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
		$user = User::with('detail')->find($id);
		$affiliates = $this->getUserAffiliates($id);

		$sales = $this->getEbookSales($id);


		$response = array( 
			'user' => $user, 
			'affiliate' => $affiliates,
		    'sales' => $sales,
		    'personal_sales' =>$this->getEbookSales($id, 'personal')
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

		if ($sales >= 12 AND $sales < 26  ) {
			return 'Bronze';
		}

		if ($sales >= 26  AND $sales < 108) {
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
}

 ?>