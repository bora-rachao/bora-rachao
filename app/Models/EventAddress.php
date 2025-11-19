<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventAddress extends Model
{
    protected $primaryKey = 'id_event_address';

    protected $fillable = [
        'event_id',
        'zip_code',
        'house_number',
        'city',
        'street',
        'neighborhood',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
