<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Arcanedev\LaravelNestedSet\Contracts\Nodeable;

class Affiliate extends Model
{
    use NodeTrait;

    protected $fillable = ['user_id', 'parent_id'];
  
  	public function user() {
  		return $this->belongsTo('App\User', 'user_id', 'id');
  	}

  	public function affiliate() {
        return $this->hasMany('App\Affiliate');
    }

    public function parent() {
        return $this->belongsTo('App\Affiliate');
    }

  	public function children() {
        return $this->hasMany('App\Affiliate', 'parent_id', 'id');
    }

    public function allChildren() {
        return $this->children()->with('allChildren');
    }
    


}

