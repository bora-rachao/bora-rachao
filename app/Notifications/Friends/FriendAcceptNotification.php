<?php

namespace App\Notifications\Friends;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FriendAcceptNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public User $fromUser)
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
            'type' => 'friend_accept',
            'title' => 'Vocês são amigos agora, bora!',
            'message' => "<p class='text-gray-700'><a class='text-cyan-500 font-semibold' href='{$url}'>@{$this->fromUser->username}</a> aceitou seu pedido de amizade.</p>",
            'user' => [
                'id_user' => $this->fromUser->id_user,
                'username' => $this->fromUser->username,
            ],
            'status' => 'accepted',
        ];
    }
}
