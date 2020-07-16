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

    public function setCashBonuses(Request $request) {
//        $userId = $request->user()->id;
        $cash = new CashBonuses();
        return $cash->store(3);
    }


    public function testing() {
        return $this->model->getGroupSales(1);
    }


    public function removeAffiliate($affiliate_id) {

    }
}
