<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'id','name', 'email', 'password','user_ip','sex','address','university',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getAuthPassword() {
        return Hash::make($this->password);
    }
}
