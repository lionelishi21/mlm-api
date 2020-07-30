<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Accounts;
use App\Repositories\Customers;



class CustomerController extends Controller
{

	protected $account;
    protected $customer;

    public function __construct() {
    	$this->account = new Accounts;
        $this->customer = new Customers;

    }


    public function index(Request $request) {
        $userId = $request->user()->id;
        return $this->customer->getCustomerByUserId($userId); 
    }



    public function store(Request $request) {
    	$userId = $request->user()->id;
    	return $this->account->createUserAccountByUserId($userId);
    } 



    /**
     * ******************************************************
     * This functransfer funs to affiliate
     * @param  Request $request [description]
     * @return [type]           [description]
     * ******************************************************
     */
    public function transfer(Request $request) {
    	$userId = $request->user()->id;
    	$amount = $request->transfer;

    	return $this->account->transfer($amount, $userId);
    }
}
