<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashBonus extends Model
{
    protected $table = 'cash_bonuses';

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
