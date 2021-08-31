<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class friendrequest extends Model
{
    protected $table = "friendrequest";
    protected $fillable = [
        'user_id','person_id','is_deleted','is_active',
    ];

}
