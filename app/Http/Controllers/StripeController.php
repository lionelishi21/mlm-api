<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,Stripe;

class StripeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stripe');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $stripe = Stripe::charges()->create([
            'source' => $request->get('tokenId'),
            'currency' => 'USD',
            'amount' => $request->get('amount') * 100
        ]);


        $response = array(
            'msg' => 'Payment was succesfull',
            'status' => true,
            'stripe' => $stripe
        );

        return $response;
    }

    public function payout(Request $request) {

        $account = Stripe::account()->create([
            'country' => 'US',
            'type' => 'custom',
            'requested_capabilities' => ['card_payments', 'transfers'],
        ]);

        return $account;
    }
}
