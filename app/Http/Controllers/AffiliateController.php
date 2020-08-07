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
        $response = $this->model->getGroupSales($userId);
        return response()->json(['response' => $response ]);
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
     * Get personal sales
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    public function getPersonalSales(Request $request) {
        $userId = $request->user()->id;
        return $this->model->getEbookSalesCount($userId);
    }

    public function addAffiliate(Request $equest) {}
}
