<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Role;
class User extends Authenticatable
{
    use Notifiable;

    protected $guard = 'users';
//    protected $table = 'users';
    protected $fillable = [
        'f_name','l_name','rolle_id','email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'rolle_id', 'id');
    }
}