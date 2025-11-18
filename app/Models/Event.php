<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id_event';

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
        'visibility',
    ];

    protected $casts = [
        'event_date' => 'datetime',
    ];

    public function address(): HasOne
    {
        return $this->hasOne(EventAddress::class, 'event_id');
    }

    public function sport(): BelongsTo
    {
        return $this->belongsTo(Sport::class, 'sport_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
