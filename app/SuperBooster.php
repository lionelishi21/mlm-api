<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class SuperBooster extends Model
{
    use NodeTrait;

     public function user() {
  		return $this->belongsTo('App\User', 'user_id', 'id');
  	}


  	 public function children() {
        return $this->hasMany('App\SuperBooster', 'parent_id', 'user_id');
    }

    public function allChildren() {
        return $this->children()->with('allChildren');
    }
}
