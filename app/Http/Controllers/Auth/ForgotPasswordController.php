<?php

namespace App\Http\Controllers\Auth;

use App\ApiCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Password;


class ForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;
  
    // public function forgot(Request $request) {
        
    //      $credentials = request()->validate(['email' => 'required|email']);
    //      Password::sendResetLink($credentials);
    //     return $this->respondWithMessage('Reset password link sent on your email id.');
    // }


    // public function reset(ResetPasswordRequest $request) {
    //     $reset_password_status = Password::reset($request->validated(), function ($user, $password) {
    //         $user->password = $password;
    //         $user->save();
    //     });

    //     if ($reset_password_status == Password::INVALID_TOKEN) {
    //         return $this->respondBadRequest(ApiCode::INVALID_RESET_PASSWORD_TOKEN);
    //     }

    //     return $this->respondWithMessage("Password has been successfully changed");
    // }
}
