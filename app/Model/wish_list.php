<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class wish_list extends Model
{
    protected $table = "wish_list";
    protected $fillable = [
        'user_id','person_id','is_deleted','is_active',
    ];

    public function wish()
    {
        return $this->belongsTo('App\Model\User','person_id');
    }
    public function img_tab()
    {
        return $this->hasOne('App\Model\imagetable', 'ref_id','person_id')->where('table_name', 'users');
    }

   
}
