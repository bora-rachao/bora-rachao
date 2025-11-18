<?php

namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use App\Models\Sport;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        $sports = Sport::all();

        return view('events.create', compact('sports'));
    }

    public function store(StoreRequest $request)
    {
        //
    }
}
