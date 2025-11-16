<?php

namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }

    public function store(StoreRequest $request)
    {
        //
    }
}
