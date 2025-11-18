<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sport_id',
        'user_id',
        'title',
        'description',
        'status',
        'event_date',
        'min_age',
        'max_players',
        'players_count',
    ];

    protected $casts = [
        'event_date' => 'datetime',
    ];
}
