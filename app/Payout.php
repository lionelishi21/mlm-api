<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    protected $table = 'payouts';
    protected $fillable = [
        'cash_bonus_id', 'user_id', 'total_amount', 'isPaid', 'payment_method', 'invoice_number'
    ];

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function bonus() {
        return $this->hasOne('App\CashBonus', 'id', 'cash_bonus_id');
    }

}
