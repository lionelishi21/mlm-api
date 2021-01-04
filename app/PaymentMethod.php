<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';
    protected $fillable = ['user_id', 'gateway_id', 'email', 'account_number', 'account_routing_number', 'other'];

    public function account() {
        return $this->hasOne('App\Gateway', 'id', 'gateway_id');
    }

}
