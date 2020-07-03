<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/mail', function() {
    return new \App\Mail\WelcomeMail();
});

Route::get('/testing', 'AffiliateController@testing');
Route::get('/cash-bonus-email', function() {
    $data = [
        'name' => 'Lionel Francis',
        'amount' => '$100.00',
        'status' => 'Bronze',
        'sales' => 12
    ];

    return new \App\Mail\CashBonus($data);
});

Route::get('/welcome-email', function() {

    $data = [
        'name' => 'Bob Donal',
        'email' => 'email.com',
        'book_link' =>'\book_link',
        'message' => 'message'
    ];

    return new \App\Mail\WelcomeMail($data);
});

Route::get('/payouts', 'StripeController@payout');
