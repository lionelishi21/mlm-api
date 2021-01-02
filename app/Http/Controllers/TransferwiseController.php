<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TransferWise\TransferWises;
use App\Repositories\Accounts;

class TransferwiseController extends Controller
{
    
    public function __construct() {
    	$this->model =  new TransferWises;
    	$this->account = new Accounts;
    }

    public function index( Request $request ) {
    	
    	$userId = $request->user()->id;
    	return $this->model->getAccountInformation($userId);
    }

    public function store(Request $request) {

    	$attributes = $request->all();
    	$userId  = $request->user()->id;

    	return $this->model->save($attributes, $userId);
    }


    public function update() {}

    public function delete() {}

    public function payout(Request $request) {

    	$userId = $request->user()->id;
    	$amount = $request->transfer;


    	$transfer = $this->account->transfer($amount, $userId, 'transferwise');

        return [
            'transfer' => true,
            'message' => $transfer
        ];
    	
    }



}
