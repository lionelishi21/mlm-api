<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use GuzzleHttp\Client;
use App\Repositories\TransferWise\TransferWises;
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
    
    }

    /**
     * [getData description]
     * @return [type] [description]
     */
    public function getData() { 
        $transferwise = new TransferWises;
        return $transferwise->payout(1, 100);        
    }


}