<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserDetail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use App\Repositories\Affiliates;
use App\Repositories\Purchases;
use App\Repositories\Users;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Repositories\CashBonuses;
use App\Mail\WelcomeMail;
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
        $user->username = $userdetails['username'];
        $user->phone_number = $userdetails['phone_number'];
        $user->email = $userdetails['email'];
        $user->password = bcrypt('enter4now');
        $user->save();


        if ( $user->save()) {
            $details = new UserDetail;
            $details->user_id = $user->id;
            $details->address1 = $userdetails['address'];
            $details->address2 = $userdetails['address2'];
            $details->country = $userdetails['country'];
            $details->postal_code  = $userdetails['zip'];
            $details->state = $userdetails['region'];
            $details->city = $userdetails['city'];
            $details->save();
        }

        /** @var Check for pending cash bonuses $cash */
        $cash = new CashBonuses;
        $cash->checkForCashBonuses();

        if ( $user->save()) {
            $purchase = new Purchases;
            $purchase->store($userdetails['referral_id'], $user->id);
        }

        if ($user->save()) {
            $users = new Users;
            $userToken = $users->generateTemporaryLink($user->id);
        }

        $book_link = 'https://maejesticares.com/ebook?token=' .  $userToken;
        $data = [
          'name' => $userdetails['first_name'].' '.$userdetails['last_name'],
          'email' => $userdetails['email'],
          'book_link' => $book_link,
          'message' => 'message'
        ];

        $email = $userdetails['email'];

        Mail::to($email)->send(new WelcomeMail($data));

        /**
         * Send confirmation email user went signing up
         * @var array
         */

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
