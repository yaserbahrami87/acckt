<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idea extends Model
{
    protected $fillable=[
        'user_id','group','category','status','group_name','full_name','birth_date','mobile','email','degree_and_field_of_study','specialty','title','description','similar_idea','level','idea_property','amountcapitals_id','your_request','date_fa','time_fa'
    ];
}
