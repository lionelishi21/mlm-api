<?php
namespace App\Repositories\TransferWise;
use App\Repositories\TransferWise\TransferWiseAbstract;
use App\TransferWise;
use App\User;

class TransferWises extends TransferWiseAbstract {

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index() {
          return $this->get('profiles');
    }

    /**
     * this function payout via transferwise
     * @param  [type] $user_id [description]
     * @param  [type] $amount  [description]
     * @return [type]          [description]
     */
    public function payout($user_id, $amount) {

        $user = User::find($user_id);
        $transferwise = TransferWise::where('user_id', '=', $user_id)->first();

        $amount = '100.00';
        $currency = 'GBP';
        $quote = $this->getQuote($amount, 'USD', $currency );

        $name = '$transferwise->name;';
        $email = '$transferwise->email';

        $details = array(
            'currency' => $currency,
            'profile_id' => '14705301',
            'name' => $name,
            'email' => $email
        );

        $account  =  $this->createRecipient($details);
        return $transfer = $this->createTransfer($quote['id'], $account['id']);

        return [
            'account' => $account,
            'quote' => $quote,
            'transfer' => $transfer
        ];
    }


    /**
     * It will make an api request
     * @param int $amount
     * @param string $sourceCurrency
     * @param string $receiverCurrency
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getQuote(int $amount, string $sourceCurrency, string $receiverCurrency) {
        return $this->post('quotes', [
            'source' => $sourceCurrency,
            'target' => $receiverCurrency,
            'rateType' => 'FIXED',
            'targetAmount' => $this->normalizeAmount($amount),
            'type' => 'BALANCE_PAYOUT'
        ]);
    }

    /**
     * **************************************************************************************
     * THIS FUNCTIN CREATE RECIPIENT
     * **************************************************************************************
     * @param  array  $array [description]
     * @return [type]        [description]
     */
    public function createRecipient( array $array) {

        $currency = 'GBP';

        return $this->post('accounts', [
            'currency' => $currency,
            'profile' => '14705301',
            'accountHolderName' => $name = "LIONEL FRANCIS", 
            'type' => 'email',
            'details' => [
                  'email' => "lionelishmael@gmail.com"
            ]
        ]);
    }

 
    /**
     * **************************************************************************************
     * THIS CREATE TRANSFER
     * ***************************************************************************************
     * @param  [type] $account_id [description]
     * @param  [type] $quote_id   [description]
     * @return [type]             [description]
     */
    public function createTransfer($quote_id, $account_id) {

        return $this->post('transfers', [
            'targetAccount' => $account_id,
            "customerTransactionId" => 'bd244a95-dcf8-4c31-aac8-bf5e2f3e54c0',
            'quote' => $quote_id
        ]);
    }


}