<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CashBonuses;

class CashBonusController extends Controller
{

    protected $cashbonus;

    /**
     * CashBonusController constructor.
     * @param CashBonuses $cashbonus
     */
    public function __construct(CashBonuses $cashbonus){
        $this->cashbonus = $cashbonus;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function index(Request $request) {
        $userId = $request->user()->id;
        $response = $this->cashbonus->index($userId);

        return [
            'response' => $response,
            'status' => 'true'
        ];
    }

    /**
     * @return array
     */
    public function allCashbonuses() {
        $response =  $this->cashbonus->getAllCashBonuse();
        return [
            response => $response,
            'message' => 'get all cash bonus list'
        ];
    }

    /**
     * @param Request $request
     */
    public function acceptCash(Request $request) {
        $userId  = $request->user()->id;
        $cashId  = $request->cashbonus_id;

    }

    /**
     * @param Request $request
     * @return array
     */
    public function userAccount(Request $request) {
        $userId = $request->user()->id;
        $cash =  $this->cashbonus->getUserAccountsByUserId($userId);
        return [
           'response' => $cash
         ];
     }

    /**
     * @param Request $request
     * @return array
     */
     public function walletSummary(Request $request) {
        $userId = $request->user()->id;
        return $this->cashbonus->getWalletSummary($userId);
     }

    /**
     * @param Request $request
     */
     public function storeAccountInformation(Request $request) {
         $attributes = $request->all();
         $userId = $request->user()->id;
         $this->cashbonus->saveAccountInformation($attributes, $userId);

         return [
             'status' => 'success'
         ];
     }

}
