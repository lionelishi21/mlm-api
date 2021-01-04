<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;

class VerificationApiController extends Controller
{
   use VerifiesEmails;

   /**
    * [verify description]
    * @param  Request $request [description]
    * @return [type]           [description]
    */
   public function verify(Request $request) {
	
		$userID = $request['id'];
		$user = User::findOrFail($userID);
		$date = date(“Y-m-d g:i:s”);
		$user->email_verified_at = $date; // to enable the “email_verified_at field of that user be a current time stamp by mimicing the must verify email feature
		$user->save();
		return response()->json('Email Verify');
	}


	/**
	 * [resend description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function resend(Request $request){
	  
	  if ($request->user()->hasVerifiedEmail()) {
		 
		 return response()->json(‘User already have verified email!’, 422);
		// return redirect($this->redirectPath());
	   }

		$request->user()->sendEmailVerificationNotification();
		return response()->json(‘The notification has been resubmitted’);
	   // return back()->with(‘resent’, true);
    }
}
