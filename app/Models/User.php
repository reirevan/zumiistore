<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username', 'name', 'email', 'password', 'phone', 'membership_level', 'balance'
    ];
    
    

    public function savedGameAccounts(): HasMany
    {
    return $this->hasMany(SavedGameAccount::class, 'user_id', 'id');
    }

}
