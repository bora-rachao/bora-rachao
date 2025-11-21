<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use App\Notifications\Friends\FriendAcceptNotification;
use App\Notifications\Friends\FriendRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    public function receiveds()
    {
        $receiveds = Auth::user()->receivedFriendRequests()->where('status', 'pending')->get();

        return view('friends.receiveds', compact('receiveds'));
    }

    public function request(User $user)
    {
        if ($user->id === Auth::id()) {
            return back()->with('error', 'Você não pode enviar um pedido para você mesmo.');
        }

        $alreadyRequested = Friend::where('user_id', Auth::id())
            ->where('friend_id', $user->id)
            ->where('status', 'pending')
            ->exists();

        if ($alreadyRequested) {
            return back()->with('error', 'Você já enviou um pedido para este usuário.');
        }

        $friendRequest = Friend::create([
            'user_id' => Auth::id(),
            'friend_id' => $user->id_user,
            'status' => 'pending',
        ]);

        $user->notify(new FriendRequestNotification(Auth::user(), $friendRequest));

        return back()->with('success', 'Pedido de amizade enviado.');
    }

    public function accept($id)
    {
        $request = Friend::where('id', $id)
            ->where('friend_id', Auth::id())
            ->where('status', 'pending')
            ->firstOrFail();

        DB::beginTransaction();

        try {
            $request->update(['status' => 'accepted']);

            DB::commit();
        } catch (\Exception $th) {
            DB::rollback();
        }

        $request->user->notify(
            new FriendAcceptNotification(Auth::user())
        );

        return back()->with('success', 'Pedido de amizade aceito.');
    }

    public function reject() {}
}
