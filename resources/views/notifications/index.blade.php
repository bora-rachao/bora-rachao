@extends('layouts.app')
@section('pageTitle', 'Minhas Notificações')
@section('content')
    <section class="container mx-auto flex flex-col max-w-3xl gap-5 justify-center my-10 px-4">

        <div class="grid gap-4 w-full">
            @forelse ($notifications as $notification)
                <div class="shadow-lg border border-gray-300 rounded-2xl p-4 bg-white w-full">
                    @switch($notification->data['type'])
                        @case('friend_request')
                            <x-notifications.friends.request :notification="$notification" />
                        @break

                        @default
                    @endswitch
                </div>
                @empty
                    <div class="min-h-[150px] flex items-center">
                        <p class="text-gray-500 text-lg">Nenhuma notificação encontrada.</p>
                    </div>
                @endforelse
            </div>

        </section>
    @endsection
