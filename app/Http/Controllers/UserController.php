<?php

namespace App\Http\Controllers;

use App\CashBonus;
use Illuminate\Http\Request;
use App\Repositories\Users;
use App\Repositories\CashBonuses;

class UserController extends Controller
{

    protected $model;
    protected $cashbonuses;

	public function __construct() {
		$this->model = new Users;
        $this->cashbonuses = new CashBonuses;
	}

	/**
	 * this function pull all user details and profile
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function profile(Request $request) {

		$userId = $request->user()->id;
		$user = $this->model->getUserDetailsById($userId);
		return response()->json(['response' => $user, 'status' => 401]);
	}

    /**
     * this is admin dashboard function
     * @param Request $request
     * @return array
     */
	public function dashboard( Request $request) {
        $userId = $request->user()->id;
        return $this->model->adminDashboard($userId);
    }

    /**
     * **********************************************************************
     * this function get user cashbonus by user id
     * **********************************************************************
     * @param $userId
     * @return array
     */
    public function cashbonuses($userId) {

	    $cashbonues = $this->cashbonuses->getUserCashBonusesByUserId($userId);
	    return $cashbonues;

    }

    /**
     * ***********************************************************************
     * this function check use name
     * ***********************************************************************
     * @param Request $request
     * @return array
     */
    public function checkUsername(Request $request) {

        $username = $request->username;
        $response = $this->model->checkUsernameAvailable($username);

        if ($response) {
             return [
                 'status' => true,
                 'msg' => 'Username is Unavailble'
             ];
        }
        return [
            'status' => false,
            'msg' => 'Username is available'
        ];
    }
}
