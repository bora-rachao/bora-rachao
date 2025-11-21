<?php

namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use App\Models\Event;
use App\Models\Sport;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class EventController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $events = Event::with(['sport', 'address', 'user'])
            ->where('event_date', '>=', now()->subHour()->toDateTimeString())
            ->where('status', 'scheduled')
            ->where(function ($q) use ($userId) {

                $q->where('visibility', 'public')
                    ->orWhere(function ($q) use ($userId) {
                        $q->where('visibility', 'only_friends')
                            ->whereExists(function ($sub) use ($userId) {
                                $sub->selectRaw(1)
                                    ->from('friends')
                                    ->whereColumn('friends.friend_id', 'events.user_id')
                                    ->where('friends.user_id', $userId)
                                    ->where('friends.status', 'completed');
                            });
                    });
            })
            ->whereNotExists(function ($sub) use ($userId) {
                $sub->selectRaw(1)
                    ->from('event_players')
                    ->whereColumn('event_players.event_id', 'events.id_event')
                    ->where('event_players.user_id', $userId);
            })

            ->get();

        return view('events.index', compact('events'));
    }

    public function create()
    {
        $sports = Sport::all();

        return view('events.create', compact('sports'));
    }

    public function store(StoreRequest $request)
    {
        $input = $request->validated();

        DB::beginTransaction();

        try {
            $event = Event::create([
                'sport_id' => $input['sport_id'],
                'user_id' => auth()->id(),
                'title' => $input['title'],
                'description' => $input['description'] ?? null,
                'event_date' => $input['event_date'],
                'min_age' => $input['min_age'] ?? null,
                'max_players' => $input['max_players'],
                'players_count' => 1,
                'visibility' => $input['visibility'],
                'status' => 'scheduled',
            ]);

            $event->address()->create([
                'zip_code' => $input['zip_code'],
                'house_number' => $input['house_number'],
                'city' => 'jau',
                'street' => 'rua teste',
                'neighborhood' => 'bairro teste',
            ]);

            DB::commit();
        } catch (\Exception $e) {

            DB::rollBack();
            dd($e->getMessage());
            throw ValidationException::withMessages([
                'general' => 'An error occurred while creating the event. Please try again.',
            ]);
        }

        return redirect()->route('home');
    }

    public function view(Event $event)
    {
        return view('events.view', compact('event'));
    }
}
