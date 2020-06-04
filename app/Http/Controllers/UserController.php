<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Users;

class UserController extends Controller
{
    protected $model;

	public function __construct() {
		$this->model = new Users;
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
}
