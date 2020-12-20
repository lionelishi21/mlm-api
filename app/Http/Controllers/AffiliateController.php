<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Affiliates;
use App\Affiliate;
use App\Repositories\CashBonuses;

class AffiliateController extends Controller
{

	protected $model;

    public function __construct() {
    	$this->model = new Affiliates;
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index() {

    	$affiliates = $this->model->getAllAffliates();
    	if ( isset($affiliates) ) {
    		return response()->json(['response' => $affiliates, 'status' => 401]);
    	}
    	return response()->json(['response' => 'no responses', 'status' => '401']);
    }

    /**
     * [details description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function details($id, Request $request){

    	if ($id == 'user') {
    		$id = $request->user()->id;
    	}
    	$details = $this->model->getAffiliatesDetails($id);
    	return $details;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserGroupSales(Request $request) {

        $userId = $request->user()->id;
        return $this->model->getSalesPercentage($userId);
    }

     /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserGroupSale($userId) {
        return $this->model->getSalesPercentage($userId);
    }

    /**
     * [setCashBonuses description]
     * @param Request $request [description]
     */
    public function setCashBonuses(Request $request) {
//        $userId = $request->user()->id;
        $cash = new CashBonuses();
        return $cash->store(3);
    }


    public function testing() {
        return $this->model->getGroupSales(1);
    }

    /**
     * [removeAffiliate description]
     * @param  [type] $affiliate_id [description]
     * @return [type]               [description]
     */
    public function removeAffiliate($affiliate_id) {

        $affiliate = Affiliate::where('affiliate_id', '=',$affiliate_id);
        if ($affiliate->delete()) {

            $purchaser = Purchases::where('user_id', '=', $affiliate->user_id)->first()->delete();
         
            Affiliate::fixTree();

            return [
                'mesagge' => 'delete successfully'
            ];
        }
    }

    /**
     * this function get system packgages details
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function systemPurchaseDetails($id) {
        return $this->model->systemPurchasesDetails($id);
    }


    
    /** This function compression affiliates manually */
    public function compression(Request $request) {
        $attributes = $request->all();
        return $this->model->switchAffiliate($attributes['selectedAffiliate'], $attributes['exchange_id']);
    }



    public function getSystemPackages() {
        return $this->model->getAllSystemPurchases();
    }

    /**
     * [updateSystemPacakges description]
     * @return [type] [description]
     */
    public function updateSystemPacakges(Request $request) {

        $attributes = $request->all();
        return $this->model->updateSystemPackagesById($attributes);

    }

    /**
     * Get personal sales
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    public function getPersonalSales(Request $request) {
        $userId = $request->user()->id;
        return $this->model->getSalesBoosterCount($userId);
    }

    /**
     * [fix description]
     * @return [type] [description]
     */
    public function fix() {
        return $this->model->fixMatrix();
    }
}
