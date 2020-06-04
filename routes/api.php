<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/





Route::group(['prefix' => 'v1'], function(){

	Route::middleware('auth:api')->group(function () {  
		  Route::get('/logout', 'AuthController@logout');
		  Route::get('/user', 'AuthController@user');
		  Route::get('/profile', 'UserController@profile');

		  Route::group(['prefix' => 'affiliates'], function() {
		   	 Route::get('/', 'AffiliateController@index');
		   	 Route::get('/details/{id}', 'AffiliateController@details');
		  });
	});

  

	Route::post('/login', 'AuthController@login');
	Route::post('/purchase', 'AuthController@register');

	// Route::get('profile', function () {
 //    // Only verified users may enter...
 //    // 
	// })->middleware('verified');

	Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');
    Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');
});



