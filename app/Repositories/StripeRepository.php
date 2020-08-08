<?php


namespace App\Repositories;

use Illuminate\Http\Request;
use App\Repositories\Accounts;

use Redirect,Response, Stripe;

class StripeRepository
{
    /**
     * Store a newly created resource in storage.
     *≈≈™
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($token, $amount, $customerName, $email)
    {


        $stripe = new \Stripe\StripeClient('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');
      
        // Create a Customer:
        $customer = $stripe->customers->create([
            'name' => $customerName,
            'source' =>  $token,
            'email' => $email,
        ]);

        
        $stripe =  $stripe->charges->create([
            'currency' => 'USD',
            'amount' => 3495,
            'customer' => $customer->id
        ]);

        // $account = new Accounts;
        // $storeCustomer = $account->saveCustomer($email, $customer->id);

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
