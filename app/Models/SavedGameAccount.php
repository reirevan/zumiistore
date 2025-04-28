<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SavedGameAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'game_name', 'game_user_id', 'server_zone'
    ];

    public function user(): BelongsTo
    {
    return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
