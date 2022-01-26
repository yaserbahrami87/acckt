<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname','tel', 'email', 'phone','password','type','avatar','birth_date','national_code','address','biography','site','university','faculty','study_field','major','supervisor_reason','instagram','linkedin','amountcapitals_id','investmentIndex_id'
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
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function amountcapital()
    {
        return $this->hasMany(amountcapital::class);
    }

    public function ideas()
    {
        return $this->hasMany('App\idea','user_id','id');
    }

    public function investmentmodel()
    {
        return $this->hasOne('App\investmentmodel');

    }

    public function demands()
    {
        return $this->hasMany('App\demand');
    }
}
