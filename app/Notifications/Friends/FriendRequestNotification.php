<?php

namespace App\Notifications\Friends;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FriendRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public User $fromUser, public Friend $friend)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        $url = route('profiles.view', $this->fromUser->username);

        return [
            'type' => 'friend_request',
            'title' => 'Novo pedido de amizade',
            'message' => "<p class='text-gray-700'><a class='text-cyan-500 font-semibold' href='{$url}'>@{$this->fromUser->username}</a> te enviou um pedido de amizade.</p>",
            'user' => [
                'id_user' => $this->fromUser->id_user, 
                'username' => $this->fromUser->username,
            ],
            'id_friend' => $this->friend->id_friend,
            'status' => 'pending',
        ];
    } 
}
