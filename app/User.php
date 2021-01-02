<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Emadadly\LaravelUuid\Uuids;
use App\Notifications\VerifyApiEmail;
use App\Notifications\PasswordResetNotification;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username', 'phone_number', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:Y-m-d H:00',
    ];

    public function sendPasswordResetNotification( $token ) {
        $this->notify(new PasswordResetNotification($token));
    }

    public function sendApiEmailVerificationNotification(){
       $this->notify(new VerifyApiEmail); // my notification
    }

    public function detail() {
        return $this->hasOne('App\UserDetail', 'user_id', 'id');
    }

    public function purchase() {
        return $this->hasMany('App\Purchase', 'user_id', 'id');
    }

//    public function affiliate() {
//        return $this->hasOne('App\Affiliate', 'user_id', 'id');
//    }

    public function affiliate() {
        return $this->hasOne('App\Affiliate', 'user_id', 'id');
    }

    public function affiliateId() {
        return $this->hasOne('App\Affiliate', 'user_id', 'id');
    }
}
