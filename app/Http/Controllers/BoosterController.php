<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Boosters;
use App\Affiliate;

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


    /**
     * ADMIN FUNCTIONALITY FOR CREATE BOOSTERS
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    public function transfer($userId) {
    	$booster = $this->booster->createBooster($userId, 1);
    	return $booster;
    }

    /**
     * THIS FUNCTION GET BOOSTER DETAILS INFORMATION
     * @param  [type] $user_id [description]
     * @return [type]          [description]
     */
    public function userBoosters( $user_id ) {

    	$details = $this->booster->getUserBoosterDetails($user_id);
    	if ( $details  ) {
    		return $details;
    	}
    }

    /**
     * [summary description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function summary(Request $request) {
    	$userId = $request->user()->id;
    	return $this->booster->getUserBoosterSummary($userId);
    }


    public function userSummary($id) {
  		$affiliate = Affiliate::where('affiliate_id', '=', $id)->first();
  		return $this->booster->getUserBoosterSummary($affiliate->user_id);
    }

    /**
     * THIS FUNCTION GET USER BOOSTER LIST
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function list( $id ) {

    	$userId = Affiliate::where('affiliate_id', '=', $id)->first()->user_id;
    	return $this->$this->booster->getUserBoosterSummary($userId);
    }


    public function fixBooster() {
    	return $this->booster->fixBoosterId();
    }
}
