<?php
namespace App\Repositories\TransferWise;
use App\Repositories\TransferWise\TransferWiseAbstract;

class TransferWise extends TransferWiseAbstract {

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

    public function getPersonalId() {
          return $this->get('profiles');
    }


    // public function createRecipient( array $array) {

    //     $currency = '';

    //     return $this->post('recipient', [
    //         'currency' => $currency
    //         'profile' => $profile_id,
    //         'accountHolderName' => $name, 
    //         'type' => 'email',
    //         'details' => {
    //             'email' => $email
    //         }
    //     ]);
    // }
}