<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amountcapital extends Model
{
    protected $fillable=[
        'user_id','amountcapitals_id'
    ];

    public function getRouteKey()
    {
        return 'user_id';
    }

//    public function user()
//    {
//        return $this->hasMany(User::class);
//    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
