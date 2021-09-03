<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class userfriend extends Model
{
    protected $table = "userfriend";
    protected $fillable = [
        'user_id','person_id','is_deleted','is_active',
    ];

    public function friends()
    {
        return $this->belongsTo('App\Model\User','user_id');
    }
    
}
