<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name','lname', 'age','phone','gender','email', 'password','is_deleted','is_active',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function img_tab()
    {
        return $this->hasOne('App\Model\imagetable', 'ref_id','id')->where('table_name', 'users');
    }

    public function wish_list()
    {
        return $this->hasMany('App\Model\wish_list', 'user_id','id');
    }
}
