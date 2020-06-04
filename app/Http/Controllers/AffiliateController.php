<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Affiliates;

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
    public function details($id){
    	$details = $this->model->getAffiliatesDetails($id);
    	return $details;
    }
}
