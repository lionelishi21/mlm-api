<?php
namespace  App\Repositories;
use App\Affiliate;
use App\Purchase;
use App\Repositories\Affiliates;
use App\Repositories\CashBonuses;
use App\PaymentMethod;
use App\Payout;
use App\CashBonus;

class Purchases {

	protected $model;
    protected $affiliate;
    protected $payment;

    public $ebookCost = 34.95;

    /**
     * Purchases constructor.
     */
	public function __construct() {
		$this->model = new Purchase;
		$this->affiliate = new Affiliates;
		$this->payment = new PaymentMethod;
		$this->cash = new CashBonuses();
	}

	/**
	 * this function store affiliate puchase
	 * @param  [type] $affil_id [description]
	 * @param  [type] $user_id  [description]
	 * @return [type]           [description]
	 */
	public function store($affil_id, $user_id, $cost = 34.95){

		$affil = Affiliate::where('affiliate_id', '=', $affil_id)->first();
		$userId = $affil->user_id;

		$purchase = new Purchase;
		$purchase->user_id = $userId;
		$purchase->purchase_by = $user_id;
		$purchase->sales_id = $this->placeSalesPurchase($userId);
		$purchase->save();



		if ($purchase->save()) {
			$this->affiliate->place($user_id, $purchase->sales_id, $cost);
		}

        return [
            'msg' => 'storing ebook purchases'
        ];
	}


	/**
	 * [checkSalesPurcahse description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function checkSalesPurcahse($userId) {
		// $sales2 = Purchase::where('sales_id', '=', $userId)->count();
		// return $sales2;
        $affiliates = Affiliate::where('parent_id', '=', $userId)->count();
        return $affiliates;
	}


	/**
	 * [placeSalesPurchase description]
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function placeSalesPurchase($userId) {

        // look for the closets affiliates id and assign the sales the him/she
        $affiliates = Affiliate::orderBy('id', 'asc')->get();
        foreach( $affiliates as $affiliate) {

            $purchaseCount = $this->checkSalesPurcahse($affiliate->user_id);
            if ($purchaseCount < 3) {
                return $affiliate->user_id;
                break;
            }
        }
	}

    /**
     * get suser account by user ids
     * @param $userId
     * @return mixed
     */
	public function getUserAccountsByUserId($userId) {
        return PaymentMethod::where('user_id', '=', $userId)->get();
    }

    /**
     * @param array $attribute
     * @return mixed
     */
    public function addUserPaymentsAccount(array $attribute) {

	    $create = $this->payment->create($attribute);
	    if ( $create ) {
	        return $create;
        }
    }

    /**
     * this function return the total ebook purchase by each members
     * @return float|int
     */
    public function totalEbookPurchase() {

        $purchases = $this->model->count();
        $cost = $purchases * $this->ebookCost;
        return number_format($cost, 2);
    }

    /**
     * this function get the total amount of payout has been made
     * @return int
     */
    public function totalAvailablePayout() {

        $amount = 0;

        $cash = new CashBonus;
        $cashbonuses = $cash->where('Status', '=', 'Pending')->get();

        foreach ($cashbonuses as $cash) {
            $amount += $cash->cash_bonus_amount;
        }

        return number_format((float)$amount, 2);
    }

    /**
     * this function get payout
     * @param int $paid
     * @return int
     */
    public function totalPayouts($paid = 1) {

        $amount = 0;
        $payout = new Payout;
        $payouts = $payout->where('isPaid', '=', $paid)->get();

        foreach( $payouts as $payout) {
            $amount += $payout->total_amount;
        }

        return $amount;
    }

    /**
     * @param $userId
     * @return string
     */
    public function salesStatusActiveInactive($userId) {

        $purchase = new Purchase;
        $salesCount = $purchase->where('user_id', '=', $userId)->count();

        if ($salesCount < 3) {
            return 'Inactive';
        }
        return 'Active';
    }

    /**
     * @return mixed
     */
    public function totalAffiliateCount($option = 'all') {

        $count = 0;
        $affiliate = new Affiliate;

        $affiliates = $affiliate->get();

        if ( $option == 'active') {
            foreach ($affiliates as $af) {

                if ($this->salesStatusActiveInactive($af->user_id) == "Active" ) {
                    $count++;
                }
            }
        }

        if ( $option == 'inactive') {
            foreach ($affiliates as $af) {

                if ($this->salesStatusActiveInactive($af->user_id) == "Inactive" ) {
                    $count++;
                }
            }
        }

        if ( $option == 'all') {
            foreach ($affiliates as $af) {
                $count++;
            }
        }

        return $count;
    }


}

 ?>

