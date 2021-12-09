<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demand extends Model
{
    protected $fillable=[
        'user_id','idea_id','proposed_price','proposed_price','status','date_fa','time_fa'
    ];
}
