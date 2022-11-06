<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Commercial extends Authenticatable
{
    use Notifiable;

    protected $guard = 'commercial';

    protected $fillable = [
        'name', 'email', 'commercial' , 'password','paswword_text'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
