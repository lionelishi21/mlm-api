<?php 
namespace  App\Repositories;
use App\Affiliate;
use App\Purchase;
use App\Repositories\Affiliates;

class Purchases {

	protected $model;

	public function __construct() {
		$this->model = new Purchase;
		$this->affiliate = new Affiliates;
	}

	/**
	 * this function store affiliate puchase
	 * @param  [type] $affil_id [description]
	 * @param  [type] $user_id  [description]
	 * @return [type]           [description]
	 */
	public function store($affil_id, $user_id) {

		$affil = Affiliate::where('affiliate_id', '=', $affil_id)->first();
		$userId = $affil->user_id;	

			
		$purchase = new Purchase;
		$purchase->user_id = $userId;
		$purchase->purchase_by = $user_id;
		$purchase->sales_id = $this->placeSalesPurchase($userId);
		$purchase->save();

		if ($purchase->save()) {
			$this->affiliate->place($user_id, $this->placeSalesPurchase($userId));
		}

		$response = [
			'msg' => 'storing ebook purchases'
		];

		return $response;
	}

	/**
	 * [checkSalesPurcahse description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function checkSalesPurcahse($userId) {
		$sales = Purchase::where('user_id', '=', $userId)->count();
		$sales2 = Purchase::where('sales_id', '=', $userId)->count();
		// return $sales + $sales2;
		return $sales2;
	}

	/**
	 * [placeSalesPurchase description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function placeSalesPurchase($userId) {

		$salesPurchase = $this->checkSalesPurcahse($userId);
		// check if ebook sales is lesser than 3 counts

			// if sales is equal 3
			// look for the closets affiliates id and assign the sales the him/she
			$affiliates = Affiliate::orderBy('created_at', 'asc')->get();
			foreach( $affiliates as $affiliate) {

				$purchaseCount = $this->checkSalesPurcahse($affiliate->user_id);
				if ($purchaseCount < 3) {
					return $affiliate->user_id;
					break;
				}
			}

	}
}

 ?>