<?php
;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Escrow extends Model
{
    protected $table = 'escrow';
    protected $fillable = ['pf', 'tier', 'amount_recieved', 'escrow', 'sales', 'user_id', 'cash_bonus'];

      /**
     * The attributes that should be cast to native types.
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
    ];

    public function user() {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }


}
