<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Booster extends Model
{
	use NodeTrait;
    
    public function user() {
  		return $this->belongsTo('App\User', 'user_id', 'id');
  	}


  	 public function children() {
        return $this->hasMany('App\Booster', 'parent_id', 'user_id');
    }

    public function allChildren() {
        return $this->children()->with('allChildren');
    }

    public function bonus() {
    	return $this->belongsTo('App\Bonus', 'user_id', 'id');
    }
}
