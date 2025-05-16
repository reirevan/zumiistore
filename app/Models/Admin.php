<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = ['name', 'username', 'email', 'password', 'is_active'];
    protected $hidden = ['password', 'remember_token'];
}
