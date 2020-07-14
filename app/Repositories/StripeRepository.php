<?php


namespace App\Repositories;

use Illuminate\Http\Request;
use Redirect,Response,Stripe;

class StripeRepository
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($token, $amount, $customerName = 'customer', $email = 'emai')
    {


        // $customer = array(
        //     'name' => $customerName,
        //     'email' => $email
        // );

        
        $stripe = Stripe::charges()->create([
            'source' => $token,
            'currency' => 'USD',
            'amount' => $amount,
            // 'customer' => $customer
        ]);

        $response = array(
            'msg' => 'Payment was succesfull',
            'status' => true,
            'stripe' => $stripe
        );

        return $response;

    }

    /**
     * [payout description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function payout(Request $request) {
        $account = Stripe::account()->create([
            'country' => 'US',
            'type' => 'custom',
            'requested_capabilities' => ['card_payments', 'transfers'],
        ]);

        return $account;
    }

}
