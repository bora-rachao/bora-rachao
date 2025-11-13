<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Register\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register.create');
    }

    public function store(StoreRequest $request)
    {
        $input = $request->validated();

        $baseUsername = str_split($input['name'])[0];

        do {
            $username = $baseUsername . '-' . Str::lower(Str::random(12));
        } while (User::where('username', $username)->exists());

        $user = User::create([
            'name' => $input['name'],
            'username' => $username,
            'email' => $input['email'],
            'password' => $input['password'],
            'document' => $input['document'],
            'date_of_birth' => $input['date_of_birth'],
            'city' => $input['city'],
            'gender' => $input['gender'],
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
