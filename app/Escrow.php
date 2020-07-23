<?php
;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Escrow extends Model
{
    protected $table = 'escrows';
    protected $fillable = ['pf', 'amount_recieved', 'escrow', 'sales', 'user_id', 'cashbonus'];

}
