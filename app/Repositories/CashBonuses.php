<?php
namespace App\Repositories;
use App\Affiliate;
use App\CashBonus;
use App\PaymentMethod;
use App\Repositories\Affiliates;
use App\Mail\CashBonus as CashBonusMail;
use App\User;
use Faker\Provider\Payment;
use Illuminate\Support\Facades\Mail;
use App\Payout;
use App\Invoice;

class CashBonuses {

    protected $cash;
    protected $affiliate;
    protected $affiliates;

    public $bronze = 12;
    public $silver = 36;
    public $gold = 108;
    public $ruby = 324;
    public $diamond = 972;

    public function __constructor(){
        $this->cash = new CashBonus;
        $this->affiliate = new Affiliate;
        $this->affiliates = new Affiliates;
        $this->payout = new Payout;

    }

    /**
     * *****************************************************************************************
     * this function get all cash bonues
     * @param userId $
     * @return mixed
     * ****************************************************************************************
     */
    public function index($userId) {

        $cash = new CashBonus;
        $cashbonus = $cash->with('user')->where('user_id', '=', 1)->get();
        if ( isset ( $cashbonus )){
            return $cashbonus;
        }
    }

    /**
     * this function get user cash bonuses
     * @param $userId
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Collection
     */
    public function getUserCashBonusesByUserId( $userId ) {
        $cash = new CashBonus;
        $cashbonus = $cash->with('user')->where('user_id', '=', $userId)->get();
        if ( $cashbonus ) {
            return $cashbonus;
        }
    }

    /**
     * get all cash bonuses admin
     * @return mixed
     */
    public function getAllCashBonuses() {
        return $this->cash->orderBy('id', 'desc')->get();
    }


    public function acceptCashBonusByUser($userId, $cashBonusId) {

        $cashbonus = $this->cash->where('id', '=', $cashBonusId)->first();

        $makePayment = $this->triggerPaymentApi($cashbonus->amount, $userId);

        if ($makePayment) {

            $cashbonus->statue = 'Paid';

            $cashbonus->save();

            if ( $cashbonus->save()) {

                $data = [
                    'cash_bonus_id' => $cashbonus->id,
                    'user_id' => $userId,
                    'isPaid' => 1,
                    'payment_method' => 'Strip',
                    'total_amount' => $cashbonus->amount,
                    'invoice_number' => 'MCH-121210212',
                ];

                $payout = $this->payout->create($data);

                if ($payout) {
                    $invoice = Invoice;
                    $invoice->user_id = $userId;
                    $invoice->invoice_number = $payout->invoice_number;
                    $invoice->amount = $cashbonus->amoun;
                    $invoice->save();
                }
            }
        }
    }

    public function triggerPaymentApi($amount, $userId) {
        return true;
    }

    /**
     * ****************************************************************
     * this function check and issue cash bonuses
     * @return string[]
     * ****************************************************************
     */
    public function checkForCashBonuses() {
        $affiliates = Affiliate::orderBy('created_at', 'asc')->get();
        foreach ($affiliates as $affiliate) {
            $this->store($affiliate->user_id);
        }

        return [
            'response' => true
        ];
    }

    /**
     * ****************************************************************
     * this function get cashbonus by status
     * @param $userId
     * @param $statusName
     * @return mixed
     * ****************************************************************
     */
    public function getCashBonuesByStatus($userId, $statusName) {
        // status: Pending, Paid, Error;
        $cash = new CashBonus;
        $cashBonus = $cash->where('user_id', '=', $userId)->where('status', '=', $statusName)->get();
        if ($cashBonus) {
            return $cashBonus;
        }
    }

    public function checkIfCashBonusExist($userId, $option) {

        $cashbonues = CashBonus::where('user_id', '=', $userId)
            ->where('sales_bonus_amount', '=', $option)
            ->count();

        if ( $cashbonues > 0 ){
            return true;
        }

        return false;
    }

    /**
     * @param $userId
     * @param $amount
     * @return bool
     */
    public function store($userId) {

        $affiliate = new Affiliates;
        $amount = $affiliate->getGroupSales($userId);



        if ( $amount == $this->bronze ) {

            $cashbonus = new CashBonus;
            $cashbonus->user_id = $userId;
            $cashbonus->cash_bonus_amount = 100;
            $cashbonus->sales_count = $this->bronze;
            $cashbonus->save();

            if ($cashbonus->save()){
               return $this->sendCashBonusEmailByUserId($userId, 100, 'Bronze', $amount );
            }
        }

        if ( $amount == $this->silver ) {
            $cashbonus = new CashBonus;
            $cashbonus->user_id = $userId;
            $cashbonus->cash_bonus_amount = 600;
            $cashbonus->sales_count = $this->silver;
            $cashbonus->save();

            if ($cashbonus->save()){
               return $this->sendCashBonusEmailByUserId($userId, 100, 'Silver', $amount );
            }
        }

        if ( $amount == $this->gold ) {
            $cashbonus = new CashBonus;
            $cashbonus->user_id = $userId;
            $cashbonus->cash_bonus_amount = 3800;
            $cashbonus->sales_count = $this->gold;
            $cashbonus->save();

            if ($cashbonus->save()){
                return $this->sendCashBonusEmailByUserId($userId, 100, 'Gold', $amount );
            }
        }

        if ( $amount == $this->ruby) {
            $cashbonus = new CashBonus;
            $cashbonus->user_id = $userId;
            $cashbonus->cash_bonus_amount = 22000;
            $cashbonus->sales_count = $this->ruby;
            $cashbonus->save();

            if ($cashbonus->save()){
                return $this->sendCashBonusEmailByUserId($userId, 100, 'Ruby' , $amount);
            }
        }

        if ( $amount == $this->diamond){
            $cashbonus = new CashBonus;
            $cashbonus->user_id = $userId;
            $cashbonus->cash_bonus_amount = 153040;
            $cashbonus->sales_count = $this->diamond;
            $cashbonus->save();

            if ($cashbonus->save()){
                return $this->sendCashBonusEmailByUserId($userId, 100, 'Diamond', $amount );
            }
        }

        if ( $amount > $this->diamond) {
            $this->repeatDiamond($userId, $amount);
        }
    }

    /**
     * *****************************************************************************
     * this function repeat diamond status
     * @param $userId
     * @param $amount
     * @return bool
     * ******************************************************************************
     */
    public function repeatDiamond($userId, $amount){

        $diamond = $this->cash->where('cash_bonus_amount', '=', 153040)->last();
        if ( $diamond ) {
            $recycle = $diamond->sales_count + 12;
            if ($recycle == $amount ) {

                $cashbonus = new CashBonus;
                $cashbonus->user_id = $userId;
                $cashbonus->cash_bonus_amount = 153040;
                $cashbonus->sales_count = amount;
                $cashbonus->save();

                if ($cashbonus->save()){
                   return $this->sendCashBonusEmailByUserId($userId, 100, 'Diamond+',$amount );
                }
            }
        }
    }

    /**
     * ***********************************************************************
     * this function send email to user who has recieve a cash bonuse
     * ***********************************************************************
     * @param $userId
     * @param $data
     * @return mixed
     * ***********************************************************************
     */
    public function sendCashBonusEmailByUserId( $userId, $amount, $status, $sales) {

//        $user = User::find($userId);
//
//        $amount = money_format('$%i', $amount);
//
//        $data = [
//            'name' => $user->first_name.' '.$user->last_name,
//            'amount' => $amount,
//            'status' => $status,
//            'sales' => $sales
//        ];
//
//        return Mail::to($user->email)->send(new CashBonusMail($data));
    }

    /**
     * this function get all user payment account information
     * @param $userId
     * @return mixed
     */
    public function getUserAccountsByUserId($userId){
        $accounts = PaymentMethod::with('account')->where('user_id', '=', $userId)->get();
            if ($accounts) {
                return $accounts;
            }
    }


    public function getWalletSummary($userId) {
        $pendingAmount = $this->getPendingCashBonuses($userId);
        $payoutAmount = $this->getTotalPayouts($userId);

        return [
            'cashbonus' =>  number_format((float)$pendingAmount, 2),
            'payouts' =>  number_format((float)$payoutAmount, 2)
        ];
    }

    /**
     * @param $userId
     * @return int
     */
    public function getPendingCashBonuses($userId) {

        $totalPending = 0;
        $pending = $this->getCashBonuesByStatus($userId, 'Pending');
        foreach ($pending as $pen) {
            $totalPending += $pen->cash_bonus_amount;
        }
        return $totalPending;
    }

    /**
     * @param $userId
     * @return int
     */
    public function getTotalPayouts( $userId) {
        $payout = new Payout;
        $payouts = $payout->where('user_id', '=', $userId)->get();
        $totalPayouts = 0;

        foreach( $payouts as $pay) {
            $totalPayouts += $pay->total_amount;
        }
        return $totalPayouts;
    }

    /**
     * @param array $array
     * @param $userId
     * @return mixed
     */
    public function saveAccountInformation(array $array, $userId) {

        $array['user_id'] = $userId;
        $method = new PaymentMethod;
        $create = $method->create($array);
        return $create;
    }
}
