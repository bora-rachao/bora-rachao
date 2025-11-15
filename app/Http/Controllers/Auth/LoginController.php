<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login\StoreRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() 
    {
        return view('auth.login.create');
    }

    public function store(StoreRequest $request) 
    {
        
    }
}
