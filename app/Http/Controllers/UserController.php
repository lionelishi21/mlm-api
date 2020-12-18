<?php

namespace App\Http\Controllers;

use App\CashBonus;
use Illuminate\Http\Request;
use App\Repositories\Users;
use App\Repositories\CashBonuses;
use App\Affiliate;
use Hash;
use App\Repositories\Purchases;
use App\User;
use App\UserDetail;

class UserController extends Controller
{

    protected $model;
    protected $cashbonuses;

	public function __construct() {
		$this->model = new Users;
        $this->cashbonuses = new CashBonuses;
	}


    /**
     * this function get all user
     * @return [type] [description]
     */
    public function index(Request $request) {


        $attributes = $request->all();
        $users = User::with('affiliate')->get();

        $response = array();
        foreach($users as $user) {

            $status = false;
            $afid = null;
            
            $affiliate = Affiliate::where('user_id', '=', $user->id) ->first();

            if ( $affiliate ) {
                $status = true;
                $afid =  $affiliate->affiliate_id,
            }

            $response[] = array(
                'id' => $user->id,
                'name' => $user->first_name.' '.$user->last_name,
                'email' => $user->email,
                'affiliate_id' => $afid
                'status' => $status,
            );
        }

        return $response;
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



    public function userDashboard( Request $request) {
        $userId = $request->user()->id;
        return $this->model->userDashboard($userId);
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

    /**
     * user shorten url
     * @param Request $request
     * @return UserController
     */
    public function getLink(Request $request) {
        $userId = $request->user()->id;
        return $this->model->getUserLink($userId);
    }


    /**'this function change user password
     * @param Request $request
     * @return array
     */
    public function changePassword(Request $request) {

        if (!(Hash::check($request->get('current_password'), $request->user()->password))) {
            return [
                'status' => false,
                'message' => 'Your current password does not matches with the password you provided. Please try again.'
            ];
        }

        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return [
                'status' => false,
                'message' => 'New Password cannot be same as your current password. Please choose a different password.'
            ];
        }

        //Change Password
        $user = $request->user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        if ( $user->save()) {
            return [
                'status' => true,
                'message' => 'Password changed successfully !'
            ];
        }

        return [
            'status' => false,
            'message' => 'Something wen wrong'
        ];
    }


    public function addAffiliate(Request $request) {

      $attributes = $request->all();

            // return User::find($attributes['parent_id']);
        $affiliate = Affiliate::where('affiliate_id', '=', $attributes['parent_id'])->first();
        if ($affiliate) {

            $purchase = new Purchases;
            $create  =  $purchase->store($affiliate['affiliate_id'], $attributes['affiliate_id']);

            if ($create) {
               return [
                'message' => "Affiliate add successfully"
               ];
            }
        }

        return [
            'message' => 'Affiliate fail to add'
        ];

    }

    /**
     * get user details by user id
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function detail(Request $request) {
         $userId = $request->user()->id;
        return UserDetail::where('user_id', '=', $userId)->first();
    }


    /**
     * ************************************************************
     * [details description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     * ************************************************************
     */
    public function details($id) {

        $details = $this->model->userDetails($id);

        if ( $details ) {
            return $details;
        }
    }


    /**
     * [resetPassword description]
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    public function resetUserPassword($userId ) {
        return $this->model->resetUserPasswordByUserId($userId);
    }


}
