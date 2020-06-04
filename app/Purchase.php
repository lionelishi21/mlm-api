<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';

    public function purchaser() {
    	return $this->hasOne('App\User', 'id', 'purchase_by');
    }

    public function saleassigned() {
    	return $this->hasOne('App\User', 'id', 'sales_id');
    }

    public function seller() {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function affiliate() {
    	
    }
}
