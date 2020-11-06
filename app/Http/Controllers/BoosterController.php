<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Boosters;

class BoosterController extends Controller
{
    protected $booster;

    public function __construct() {
    	$this->booster = new Boosters;
    }

    public function index(Request $request) {
    	$attributes = $request->all();
    	return $this->booster->getAllMembers($attributes);
    }


    public function details( $id ) {
    	return $this->booster->getBoosterDetailById( $id ) ;
    }


    public function transfer($userId) {
    	$booster = $this->booster->createBooster($userId, 1);
    	return $booster;
    }

    public function userBoosters( $user_id ) {

    	$details = $this->booster->getUserBoosterDetails($user_id);

    	if ( $details  ) {
    		return $details;
    	}
    }
}
