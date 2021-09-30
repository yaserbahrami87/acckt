<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verify extends Model
{
    protected $fillable=[
        'tel','code','verify','type','date_fa','time_fa'
    ];
}
