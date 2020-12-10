<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use GuzzleHttp\Client;
use App\Repositories\TransferWise\TransferWise;
use App\Repositories\TransferWise\CurrencyBank;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    

    public function getData() { 

        $transferwise = new TransferWise;
        $recipients = new Recipient;

        // create quote
        $qoutes = $transferwise->getQuote(100, 'USD','GBP');
        


       //create recipient
        $array = array();
        $recipient  = $recipients->save();

        //create transfer
        //
        

        //fund transfer

    }



}
