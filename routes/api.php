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


    Route::post('/password/email-link', 'Auth\ForgotPasswordController@sendResetLinkEmail');
	Route::middleware('auth:api')->group(function () {

  	    Route::get('/download-ebook', 'DownloadController@download');
  		  Route::get('/logout', 'AuthController@logout');
  		  Route::get('/user', 'AuthController@user');
  		  Route::get('/link', 'UserController@getLink');
  		  Route::get('/profile', 'UserController@profile');

  		  Route::post('/changePassword', 'UserController@changePassword');

  		  Route::group(['prefix' => 'affiliates'], function() {
  		   	 
  		   	 Route::get('/', 'AffiliateController@index');
  		   	 Route::get('/details/{id}', 'AffiliateController@details');
  		   	 Route::get('/group-sales', 'AffiliateController@getUserGroupSales');
  		   	 Route::get('/user-dashboard', 'UserController@userDashboard');
  		   	 Route::post('/add-affiliate', 'UserController@addAffiliate');
  		   	 Route::get('/delete-affailiate/{id}', 'AffiliateController@removeAffiliate');
             Route::get('/personal-sales', 'AffiliateController@getPersonalSales');

  		  });

  		  Route::get('/cashbonuses/{id}', 'UserController@cashbonuses');

  		  Route::group(['prefix' => 'admin'], function() {
                Route::get('/dashboard', 'UserController@dashboard');
        });

  		  Route::group(['prefix' => 'wallet'], function() {
            Route::get('/', 'CashBonusController@index');
            Route::get('/user-accounts', 'CashBonusController@userAccount');
            Route::get('/summary', 'CashBonusController@walletSummary');
            Route::post('/add-account', 'CashBonusController@storeAccountInformation');
        });

        Route::group(['prefix' => 'users'], function() {
        	 Route::get('/detail', 'UserController@detail');
        	 Route::get('/reset-password/{id}', 'UserController@resetUserPassword');
        	 Route::get('/details/{id}', 'UserController@details');

        });

        Route::group(['prefix' => 'escrow'], function() {
        	  Route::get('/', 'EscrowController@getEscrows');
        });

        Route::post('change-password', 'UserController@changePassword');

        Route::group(['prefix' => 'customers'], function() {

            Route::post('/bank', 'CustomerController@addBank');
            Route::post('/add-paypal', 'CustomerController@paypal');
            Route::get('/get-paypal', 'CustomerController@getPaypalAccount');

    		Route::get('/account', 'CustomerController@store');
    		Route::post('/transfer', 'CustomerController@transfer');
            Route::get('/', 'CustomerController@index');
            Route::get('/account', 'CustomerController@account');

            Route::post('/paypal-withdrawal', 'CustomerController@paypalWithdrawal');
            Route::get('/transactions', 'CustomerController@getTransactions');
            Route::get('/payout-accounts', 'CustomerController@getUserAccounts');

            Route::post('/add-debitcard', 'CustomerController@debitCard');
            Route::get('/stripe-account', 'CustomerController@getStripeAccount');

            Route::get('account-link', 'CustomerController@link');
            Route::get('update-account-link', 'CustomerController@updateLink');
            Route::post('/remove-account', 'CustomerController@removeExternalAccount');
        });


        Route::group(['prefix' => 'bank'], function() {
          Route::post('store', 'CustomerController@addBank');
        });
	 });

	Route::get('/users', 'UserController@index');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

    Route::get('stripe', 'StripeController@index');
    Route::post('store', 'StripeController@store');

    Route::get('/username-availability', 'UserController@checkUsername');
  	Route::post('/login', 'AuthController@login');
  	Route::post('/purchase', 'AuthController@register');

    Route::get('/countries', 'CountryStatesCityController@countries');
    Route::get('/states/{id}', 'CountryStatesCityController@states');
    Route::get('/cities/{id}', 'CountryStatesCityController@cities');

  	Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');
    Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');

});



