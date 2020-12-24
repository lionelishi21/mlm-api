<?php

use Illuminate\Support\Facades\Route;
use App\Affiliate;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Repositories\Stripe;
use App\UserDetail;
use App\User;

use TransferWise\TransferWise;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/fix-booster', 'BoosterController@fixBooster');
Route::get('/download-ebook', 'DownloadController@downloadEbook');

Route::get('/test', 'HomeController@getData');

Route::get('/customer/{email}', 'CustomerController@stripecustomer');
Route::get('/payout', 'CustomerController@testPayout');

Route::get('/stripe', 'CustomerController@teststripe');
   // Route::get('/fix', 'AffiliateController@fix');
Route::get('/payout-reminder', 'EscrowController@payoutEmail');
Route::get('/countries', function() {


       
});