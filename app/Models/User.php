<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'document',
        'date_of_birth',
        'city',
        'gender',
        'avatar',
        'bio',
        'friends_count',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function friends()
    {
        return $this->hasMany(Friend::class, 'user_id')
            ->where(function ($q) {
                $q->where('user_id', $this->id)
                    ->orWhere('friend_id', $this->id);
            });
    }

    public function sentFriendRequests(): HasMany
    {
        return $this->hasMany(Friend::class, 'user_id');
    }

    public function receivedFriendRequests(): HasMany
    {
        return $this->hasMany(Friend::class, 'friend_id');
    }

    public function adminEvents(): HasMany
    {
        return $this->hasMany(Event::class, 'user_id');
    }

    public function joinedEvents(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'event_players', 'user_id', 'event_id');
    }

    public function friendshipWith(User $otherUser)
    {
        return Friend::where(function ($q) use ($otherUser) {
            $q->where('user_id', $this->id_user)
                ->where('friend_id', $otherUser->id_user);
            })
            ->orWhere(function ($q) use ($otherUser) {
                $q->where('user_id', $otherUser->id_user)
                    ->where('friend_id', $this->id_user);
            })
            ->first();
    }
}
