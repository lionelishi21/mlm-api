<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Accounts;


class UserAccountController extends Controller
{
    

	public $account;

	public function __construct() {
		$this->account = new Accounts;
	}


    public function index() {
 		return $this->account->getAllUsersStripeAccount();
    }
}
