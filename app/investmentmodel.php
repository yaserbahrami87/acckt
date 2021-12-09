<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class investmentmodel extends Model
{
    protected $fillable=[
        'user_id','familiaritymodel_id','investmentmodel_id','investmentmethod_id'
    ];
}
