<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Accounts;
use App\Repositories\Customers;
use App\Repositories\Bank;
use App\Repositories\Paypal;

use App\Repositories\StripeRepository;


class CustomerController extends Controller
{

	protected $account;
    protected $customer;

    public function __construct() {
    	
        $this->account = new Accounts;
        $this->customer = new Customers;
        $this->bank = new Bank;
        $this->paypal = new Paypal;
    }

    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request) {
        $userId = $request->user()->id;
        return $this->customer->getCustomerByUserId($userId); 
    }

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request) {
    	$userId = $request->user()->id;
    	return $this->account->createUserAccountByUserId($userId);
    } 


    /**
     * ********************************************************
     * this function get available checkout account
     * @param  Request $request [description]
     * @return [type]           [description]
     * ********************************************************
     */
    public function getUserAccounts(Request $request) {
        $userId = $request->user()->id;
        return $this->account->getUserAccountsByUserId($userId);
    }


    /**
     * Get user payout transactions
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getTransactions(Request $request) {

         $userId = $request->user()->id;
         return $this->account->getTransactions($userId);
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

    /**
     * this funct get customer account information 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function account(Request $request) {

        $userId = $request->user()->id;
        return $this->account->userAccount($userId);
    }

    /**
     * this function add external account using stripe
     * @param Request $request [description]
     */
    public function addBank(Request $request) {
        $attributes = $request->all();
        $userId = $request->user()->id;
        // $account = $this->account->addBankInformation($attributes, $userId);
        $account = $this->bank->store($attributes, $userId);
        return $account;
    }


    public function stripecustomer($email) {
        return $this->account->getStripeCustomerByEmail($email);
    }


    /**
     * [paypal description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function paypal(Request $request) {
        
        $attributes = $request->all();
        $userId = $request->user()->id;
        return $this->paypal->addPaypalAccount($attributes, $userId);
    }


    public function getPaypalAccount(Request $request) {
        $userId = $request->user()->id;
        return $this->paypal->index($userId);
    }

    /**
     * [paypalWithdrawa description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function paypalWithdrawal(Request $request) {
        $userId = $request->user()->id;
        return $this->paypal->singlePayout($userId);
    }

    /**
     * This functions ave user debit card information has an external account
     * using stripe
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function debitCard(Request $request) {
        $attributes = $request->all();
        $userId = $request->user()->id;
    }

    /**
     * this function create mcc cardholder account 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function mccCard(Request $request) {

        $attributes = $request->all();
        $userId = $request->user()->id;
    }


    public function testPayout() {
        return $this->paypal->payWithpaypal();
    }

    public function teststripe() {
        $stripe = new StripeRepository;

       return $stripe->test();
    }
}
