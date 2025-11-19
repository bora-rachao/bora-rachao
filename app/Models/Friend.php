<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = [
        'id_friend',
        'user_id',
        'friend_id',
        'status',
    ];
}
