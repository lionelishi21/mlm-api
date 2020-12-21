<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Escrows;
use App\Escrow;

class EscrowController extends Controller
{


	protected $escrows;

    /**
     * [__construct description]
     */
	public function __construct() {
        $escrows = new Escrows;
		$this->escrows = $escrows;
	}

    /**
     * ************************************************************************************************
     * This function filter all affiliates cash bonuses
     * ************************************************************************************************
     * @param  Request $request [description]
     * @return [type]           [description]
     * ************************************************************************************************
     */
    public function index(Request $request) {
        $attributes = $request->all();
        return $this->escrows->getPayouts();
    }

     
    /**
     * ************************************************************************************************
     * [escrow description]
     * *************************************************************
     * @return [type] [description]
     * *************************************************************************************************
     */
    public function escrow() {
        $this->escrows->checkAffiliatesEscrow();
    }

    /**
     * *************************************************************************************************
     * Get user escrow by user id
     * *************************************************************************************************
     * @param  Request $request [description]
     * @return [type]           [description]
     * *************************************************************************************************
     */
    public function getEscrows(Request $request) {
       
        $userId = $request->user()->id;
        return $this->escrows->getEscrowByUserId($userId);
    }

    /**
     * [getAllUserEscrows description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getAllUserEscrows(Request $request) {

        $attributes = $request->all();
        $escrow = $this->escrows->getAll();

        return [
            'status' => true,
            'escrows' => $escrow
        ];
    }

    /**
     * this function create manual payouts
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function manualPayout(Request $request) {

        $attributes = $request->all();
        return $this->escrows->makeManualPayout($attributes);
    }


    public function payoutEmail() {
        return $this->escrows->cashBonusReminder();
    }

    /**
     * remove payouts
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id) {

        $escrow = Escrow::find($id);
        if ( $escrow ) {
           return  $escrow->delete();
        } 
    }

}
