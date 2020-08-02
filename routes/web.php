<?php

use Illuminate\Support\Facades\Route;
use App\Affiliate;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


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

Route::get('/download-ebook/{id}', 'DownloadController@downloadEbook');

Route::get('/test', function() {
	   $data = [
          'name' => 'email',
          'email' => 'lionelishmael@gmail.com',
          'book_link' => 'link',
          'message' => 'message',
            'token' => '$userToken'

        ];
        $email = 'lionelishmael@gmail.com';
        $send = Mail::to($email)->send(new WelcomeMail($data));

       return $data;
});