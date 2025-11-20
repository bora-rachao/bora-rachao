<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\Profiles\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private ?User $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function profile()
    {
        $user = $this->user;
        return view('users.profile', compact('user'));
    }

    public function profileUpdate(UpdateRequest $request)
    {
        $input = $request->validated();

        $this->user->update([
            'username' => $input['username'],
            'city' => $input['city'],
            'bio' => $input['bio'],
        ]);

        return redirect()->back();
    }

    public function avatar()
    {
        $user = $this->user;
        return view('users.avatar', compact('user'));
    }

    public function personal()
    {
        $user = $this->user;
        return view('users.personal', compact('user'));
    }

    public function password()
    {
        $user = $this->user;
        return view('users.password', compact('user'));
    }
}
