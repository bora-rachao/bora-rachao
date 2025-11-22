<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\Avatar\UpdateRequest as AvatarUpdateRequest;
use App\Http\Requests\Users\Passwords\UpdateRequest as PasswordsUpdateRequest;
use App\Http\Requests\Users\Personal\UpdateRequest as PersonalUpdateRequest;
use App\Http\Requests\Users\Profiles\UpdateRequest as ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function profileUpdate(ProfileUpdateRequest $request)
    {
        $input = $request->validated();

        $this->user->update([
            'username' => $input['username'],
            'city' => $input['city'],
            'bio' => $input['bio'],
        ]);

        return redirect()->back()->with([
            'success' => 'Perfil atualizado com sucesso.'
        ]);
    }

    public function avatar()
    {
        $user = $this->user;
        return view('users.avatar', compact('user'));
    }

    public function avatarUpdate(AvatarUpdateRequest $request)
    {
        if ($this->user->avatar) {
            Storage::disk('public')->delete($this->user->avatar);
        }

        $file = $request->file('avatar');

        $filename = sha1(time() . $this->user->id . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();

        $path = "assets/images/users/{$filename}";

        Storage::disk('public')->put($path, file_get_contents($file));

        $this->user->avatar = $filename;
        $this->user->save();

        return back()->with('success', 'Imagem atualizada com sucesso!');
    }


    public function personal()
    {
        $user = $this->user;
        return view('users.personal', compact('user'));
    }

    public function personalUpdate(PersonalUpdateRequest $request)
    {
        $input = $request->validated();

        $this->user->update([
            'email' => $input['email'],
        ]);

        return redirect()->back()->with([
            'success' => 'Dados pessoais atualizados com sucesso.'
        ]);
    }

    public function password()
    {
        $user = $this->user;
        return view('users.password', compact('user'));
    }

    public function passwordUpdate(PasswordsUpdateRequest $request)
    {
        $input = $request->validated();

        $this->user->update([
            'password' => $input['password'],
        ]);

        return redirect()->back()->with([
            'success' => 'Senha atualizada com sucesso.'
        ]);
    }
}
