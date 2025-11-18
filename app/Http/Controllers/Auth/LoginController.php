<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create() 
    {
        return view('auth.login.create');
    }

    public function store(StoreRequest $request) 
    {
        $input = $request->validated();

        if (!Auth::attempt($input)) {
            throw ValidationException::withMessages([
                'error' => __('auth.failed') 
            ]);
        }
        
        $request->session()->regenerate();
        return redirect()->intended(route('home'));
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
