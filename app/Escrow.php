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
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:Y-m-d H:00',
    ];


}
