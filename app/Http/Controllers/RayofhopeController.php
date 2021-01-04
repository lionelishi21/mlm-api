<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Rayhope;


class RayofhopeController extends Controller
{
    
    protected $hope;

    public function __construct() {
    	$this->hope = new Rayhope;
    }

    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request) {
    	$attributes = $request->all();
    	return $this->hope->getAllMembers($attributes);
    }

    /**
     * ********************************************************
     * THIS FUNCTION GET AFFILIATE DETAILS
     * *********************************************************
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function details($id) {
    	return $this->hope->getDetailsById($id);
    }
}
