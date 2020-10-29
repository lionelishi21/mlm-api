<?php


namespace App\Repositories;

use Illuminate\Http\Request;
use App\Repositories\Accounts;
use App\User;
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

        $live = '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';

        $stripe = new \Stripe\StripeClient($live );
      
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
     * **********************************************************************
     * this function update booster packages
     * **********************************************************************
     * @param  array  $array [description]
     * @return [type]        [description]
     * **********************************************************************
     */
    public function purchaseBooster(array $array, $userId) {

        $test = 'sk_test_Yha4F4mAhvGfsvZSvvCDgbBy00nMLLAhkJ';
        $live = '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';
        
        $stripe =  new \Stripe\StripeClient($live);
        
        $user = User::find($userId);

        // Create a Customer:
        $customer = $stripe->customers->create([
            'source' => $array['tokenId'],
            'email' => $user->email,
            'name' => $user->first_name.' '.$user->last_name
        ]);

        $stripe =  $stripe->charges->create([
            'currency' => 'USD',
            'amount' =>  $array['amount'],
            'customer' => $customer->id
        ]);

        if ($stripe) {

            $response = array(
                'msg' => 'Payment was succesfull',
                'status' => true,
                'stripe' => $stripe
            );
        }

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
