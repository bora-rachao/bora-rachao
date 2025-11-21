<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function view(User $user)
    {
        $loggedUserId = Auth::id();

        $adminEvents = $user
            ->adminEvents()
            ->with(['sport', 'address', 'user'])
            ->where('event_date', '>=', now()->subHour()->toDateTimeString())
            ->where('status', 'scheduled')
            ->where(function ($q) use ($loggedUserId) {
                $q->where('visibility', 'public')
                    ->orWhere(function ($q) use ($loggedUserId) {
                        $q->where('visibility', 'only_friends')
                            ->whereExists(function ($sub) use ($loggedUserId) {
                                $sub->selectRaw(1)
                                    ->from('friends')
                                    ->whereColumn('friends.friend_id', 'events.user_id')
                                    ->where('friends.user_id', $loggedUserId)
                                    ->where('friends.status', 'completed');
                            });
                    });
            })
            ->whereNotExists(function ($sub) use ($loggedUserId) {
                $sub->selectRaw(1)
                    ->from('event_players')
                    ->whereColumn('event_players.event_id', 'events.id_event')
                    ->where('event_players.user_id', $loggedUserId);
            })
            ->get();

        $randomFriends = $user->friends()
            ->where('status', 'completed')
            ->inRandomOrder()
            ->when($loggedUserId, function ($q) use ($loggedUserId) {
                $q->where('user_id', '!=', $loggedUserId)
                    ->where('friend_id', '!=', $loggedUserId);
            })
            ->take(4)
            ->get();

        $friendRelation = Auth::user()?->friendshipWith($user)?->status;

        return view('profiles.view', compact(
            'user',
            'adminEvents',
            'randomFriends',
            'friendRelation',
        ));
    }
}
