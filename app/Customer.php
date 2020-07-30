<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    public function gateway() {
    	return $this->hasOne('App\Gateway', 'id', 'type');
    } 
}
