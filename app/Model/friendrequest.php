<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class friendrequest extends Model
{
    protected $table = "friendrequest";
    protected $fillable = [
        'user_id','person_id','is_deleted','is_active',
    ];

    
    public function friend_req()
    {
        return $this->belongsTo('App\Model\User','user_id');
    }
    public function img_tab()
    {
        return $this->hasOne('App\Model\imagetable', 'ref_id','person_id')->where('table_name', 'users');
    }

}
