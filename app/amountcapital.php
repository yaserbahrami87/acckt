<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amountcapital extends Model
{
    protected $fillable=[
        'user_id','amountcapitals'
    ];

    public function getRouteKey()
    {
        return 'user_id';
    }
}
