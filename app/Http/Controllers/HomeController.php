<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $loggedUser = Auth::user();

        $randomEvents = Event::with(['address', 'user', 'sport'])
            ->when($loggedUser, function ($q) use ($loggedUser) {
                $q->whereHas('address', function ($sub) use ($loggedUser) {
                    $sub->where('city', $loggedUser->city);
                });
            })
            ->where('status', 'scheduled')
            ->where('visibility', 'public')
            ->where('event_date', '>=', now()->subHour())
            ->inRandomOrder()
            ->get();

        return view('home.home', compact('randomEvents'));
    }
}
