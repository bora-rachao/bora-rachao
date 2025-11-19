@props(['event'])

<a href="{{ route('events.view', $event->id_event) }}">
    <div
        class="bg-white text-gray-700 shadow-lg border border-gray-300 px-3 py-2 rounded-2xl hover:scale-[1.02] duration-300 ease-in-out">
        <span class="font-semibold capitalize text-start text-white bg-lime-500 rounded-lg px-2">bora
            {{ $event->sport->name }}
        </span>
        <div class="flex items-center justify-start space-x-1 mt-1">
            @if ($event->user->avatar)
                <img src="{{ $event->user->avatar }}" class="w-8 h-8 rounded-full border-2 border-gray-300 object-cover "
                    alt="{{ $event->user->username }}" />
            @else
                <img src="{{ asset('assets/images/default/user.jpg') }}"
                    class="w-8 h-8 rounded-full border-2 border-gray-300 object-cover "
                    alt="{{ $event->user->username }}" />
            @endif
            <p class="font-bold text-cyan-500">{{ $event->user->username }}</p>
        </div>
        <hr class="text-gray-300 my-1" />
        <div>
            <div class="flex items-center justify-between mb-0.5">
                <p class="text-gray-500 text-sm font-semibold">
                    <i class="fa-solid fa-calendar me-1"></i>{{ $event->event_date->format('d/m/y - H:s') }}h
                </p>
                <p class="text-orange-500 font-bold">
                    <i class="fa-solid fa-users me-1"></i>{{ $event->players_count }}/{{ $event->max_players }}
                </p>
            </div>
        </div>
        <div>
            <div class="flex items-center justify-end">
                <p class="text-gray-500 font-semibold">
                    <i class="fa-solid fa-location-dot me-0.75"></i>{{ ucfirst($event->address->city) }}
                </p>
            </div>
        </div>
    </div>
</a>
