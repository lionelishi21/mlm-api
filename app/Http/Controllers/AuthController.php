<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserDetail;
use Illuminate\Support\Str;

use App\Repositories\Affiliates;
use App\Repositories\Purchases;
use Carbon\Carbon;
use Auth;

class AuthController extends Controller
{
    

	/**
	 * ****************************************
	 * This function register user via api
	 * ****************************************
	 * @param  Request $request [description]
	 * @return [type]           [description]
     ****************************************** 
	 */
    public function register(Request $request) {

        $userdetails = $request->user; 
        $payments = $request->payment;
        $hashed_random_password = Hash::make(Str::random(8));

        $user = New User;
        $user->first_name = $userdetails['first_name'];
        $user->last_name = $userdetails['last_name'];
        $user->email = $userdetails['email'];
        $user->password = bcrypt('password');
        $user->save();
    

        if ( $user->save()) {
            $details = new UserDetail;
            $details->user_id = $user->id;
            $details->address1 = $userdetails['address'];
            // $details->address2 = $userdetails['address2'];
            $details->country = $user['country'];
            $details->state = $user['region'];
            $details->save();
        }


        // if ( $user->save()) {
        //    $newAfiliates = new Affiliates;
        //    $new = $newAfiliates->createAffiliate($user->id, $userdetails['referral_id']);
        // }


        if ( $user->save()) {
            $purchase = new Purchases;
            $purchase->store($userdetails['referral_id'], $user->id);
        }


        // $user->sendApiEmailVerificationNotification();

        /**
         * Send confirmation email user went signing up
         * @var array
         */
         // $user->sendApiEmailVerificationNotification();


        return response()->json([
            'success' => true,
            'message' => 'Please confirm yourself by click on verify user button sent to you on your email.',
        ]);
    }

    /**
     * ****************************************
     * this function login use in via api
     * ****************************************
     * @param  Request $request [description]
     * @return [type]           [description]
     * ****************************************
     */
    public function login(Request $request) {

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {

            if (Hash::check($request->password, $user->password)) {

                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token, 'user' => $user, 'message' => 'Login successfull'];

                return response($response, 200);

            } else {
                $response = "Password missmatch";
                return response($response, 422);
            }

        } else {
            $response = 'User does not exist';
            return response($response, 422);
        }
    }

    /**
     * ****************************************
     * This function logout user
     * ****************************************
     * @param  Request $request [description]
     * @return [json]           user object
     * ****************************************
     */
    public function logout(Request $request) {
    	
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * ***************************************
     * Get the user infromation
     *****************************************
     * @return [json] user object
     */
    public function user(Request $request)
    {
       return response()->json($request->user());
    }
}
