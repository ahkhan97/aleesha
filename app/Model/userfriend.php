<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class userfriend extends Model
{
    protected $table = "userfriend";
    protected $fillable = [
        'user_id','person_id','is_deleted','is_active',
    ];

    public function showfriends()
    {
        return $this->belongsTo('App\Model\User','user_id');
    }

    public function img_tab()
    {
        return $this->hasOne('App\Model\imagetable', 'ref_id','id')->where('table_name', 'users');
    }
    
}
