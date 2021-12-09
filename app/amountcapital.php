<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amountcapital extends Model
{
    protected $fillable=[
        'user_id','capitalgroup_id','capitalcategory_id','trl','amountcapitals_id','statute','description','description_startup','injectioncapital_id','outstanding_investment','request'
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
