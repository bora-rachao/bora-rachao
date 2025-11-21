@extends('layouts.app')
@section('pageTitle', $user->username)
@section('content')

    <section class="container mx-auto px-4 mt-6 mb-[150px]">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-y-16 md:gap-x-5">
            <div class="flex flex-col gap-y-3 justify-center md:justify-start items-center">
                <div class="flex flex-col justify-center">
                    <div class="flex justify-between">
                        @if ($user->id_user !== auth()->id())
                            @if ($friendRelation === 'pending')
                                <div
                                    class="bg-linear-to-tr shadow-lg from-cyan-500 to-cyan-300 hover:shadow-lg hover:shadow-cyan-400/50 hover:cursor-pointer duration-300 ease-in-out text-white py-2 px-3 text-2xl rounded-full">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                            @elseif($friendRelation === 'accepted')
                                <form action="{{ route('friends.destroy', $user->username) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-linear-to-tr shadow-lg from-red-600 to-red-400 hover:shadow-lg hover:shadow-red-500/50 hover:cursor-pointer duration-300 ease-in-out text-white p-2 text-2xl rounded-full">
                                        <i class="fa-solid fa-user-xmark px-px"></i>
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('friends.request', $user->username) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="bg-linear-to-tr shadow-lg from-lime-500 to-lime-300 hover:shadow-lg hover:shadow-lime-400/50 hover:cursor-pointer duration-300 ease-in-out text-white py-2 px-3 text-2xl rounded-full">
                                        <i class="fa-solid fa-plus px-px"></i>
                                    </button>
                                </form>
                            @endif
                        @else
                            <a href="{{ route('users.profile') }}"
                                class="bg-linear-to-tr shadow-lg from-cyan-500 to-cyan-300 hover:shadow-lg hover:shadow-cyan-400/50 hover:cursor-pointer duration-300 ease-in-out text-white py-2 px-3 text-2xl rounded-full">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        @endif
                    </div>
                    <img src="{{ $user->avatar ? asset('storage/assets/images/users/' . $user->avatar) : asset('assets/images/default/user.jpg') }}"
                        class="size-[250px] min-w-[250px] min-h-[250px] rounded-full object-cover border-4 border-gray-300 shadow-lg"
                        alt="{{ $user->username }}" />
                </div>
                <div>
                    <h2 class="text-center text-3xl text-cyan-500 font-semibold mb-0.5">
                        {{ '@' . $user->username }}
                    </h2>
                    <div class="text-center mb-2">
                        <a href="/app/Views/user/friends.html"
                            class="text-gray-500 text-sm hover:text-orange-500 duration-300 ease-in-out">
                            <i class="fa-solid fa-users text-xs"></i>
                            {{ $user->friends_count }} amigo(s)
                        </a>
                    </div>
                    <div>
                        <p class="text-gray-600 text-sm">
                            {{ $user->bio }}
                        </p>

                    </div>
                </div>
                @if ($user->id_user !== auth()->id() && count($randomFriends) > 0)
                    <div class="w-full text-start mt-2">
                        <h2 class="text-lg text-gray-500 font-semibold">
                            <i class="fa-solid fa-users"></i>
                            Talvez você conheça também
                        </h2>
                    </div>
                    <div class="flex flex-col gap-y-3 w-full">
                        @foreach ($randomFriends as $friend)
                            <a href="{{ route('profiles.view', $friend->username) }}" class="w-full">
                                <div
                                    class="flex items-center bg-white text-gray-700 shadow-lg border border-gray-300 px-3 py-1 rounded-2xl hover:scale-[1.02] duration-300 ease-in-out">
                                    <div class="flex items-center justify-start space-x-2 mt-1 w-full">
                                        <img src="/resources/assets/images/altairjuninho.jpg"
                                            class="w-8 h-8 rounded-full border-2 border-gray-300 object-cover"
                                            alt="altairjuninho" />
                                        <div>
                                            <p class="font-bold text-gray-500 text-md mb-[-3px]">
                                                {{ '@' . $friend->username }}
                                            </p>
                                            <p class="text-xs text-gray-500">7 amigos em comum</p>
                                        </div>
                                    </div>
                                    <div class="text-end shrink-0">
                                        <i
                                            class="fa-solid fa-arrow-right text-lime-500 bg-lime-500/40 p-2 rounded-full"></i>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-span-3">
                <div class="md:px-6">
                    <h2 class="text-2xl text-gray-500 font-semibold mb-7">
                        <i class="fa-solid fa-basketball"></i>
                        Partidas que está organizando
                    </h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-3 gap-y-4">
                        @foreach ($adminEvents as $event)
                            <x-events.single-block :event="$event" />
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col my-8 gap-y-7 md:px-6">
                    <h2 class="text-2xl text-gray-500 font-semibold mb-3">
                        <i class="fa-solid fa-clock"></i>
                        Atividade
                    </h2>
                    <fieldset class="bg-white shadow-lg border border-gray-300 rounded-xl p-5 flex flex-col gap-y-3">
                        <legend class="text-gray-600">Hoje</legend>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Corrida</span> de
                            <a href="" class="text-cyan-500">@altairjuninho</a>
                            com mais 2 pessoas
                        </div>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Ciclismo</span> de
                            <a href="" class="text-cyan-500">@joaocf</a>
                            com mais 6 pessoas
                        </div>
                    </fieldset>
                    <fieldset class="bg-white shadow-lg border border-gray-300 rounded-xl p-5 flex flex-col gap-y-3">
                        <legend class="text-gray-600">Ontem</legend>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de um bora de
                            <span class="font-bold italic">Skate</span> de
                            <a href="" class="text-cyan-500">@gabribeiro</a>
                            com mais 3 pessoas
                        </div>
                    </fieldset>
                    <fieldset class="bg-white shadow-lg border border-gray-300 rounded-xl p-5 flex flex-col gap-y-3">
                        <legend class="text-gray-600">19/05/2025</legend>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Corrida</span> de
                            <a href="" class="text-cyan-500">@pietror45</a>
                            com mais 1 pessoa
                        </div>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Sinuca</span> de
                            <a href="" class="text-cyan-500">@joaocf</a>
                            com mais 4 pessoas
                        </div>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Vôlei</span> de
                            <a href="" class="text-cyan-500">@joaocf</a>
                            com mais 2 pessoas
                        </div>
                    </fieldset>
                    <fieldset class="bg-white shadow-lg border border-gray-300 rounded-xl p-5 flex flex-col gap-y-3">
                        <legend class="text-gray-600">17/05/2025</legend>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Vôlei</span> de
                            <a href="" class="text-cyan-500">@lucasbardelli</a>
                            com mais 6 pessoas
                        </div>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Basquete</span> de
                            <a href="" class="text-cyan-500">@eullerls</a>
                            com mais 4 pessoas
                        </div>
                    </fieldset>
                    <fieldset class="bg-white shadow-lg border border-gray-300 rounded-xl p-5 flex flex-col gap-y-3">
                        <legend class="text-gray-600">15/05/2025</legend>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Beach Tennis</span> de
                            <a href="" class="text-cyan-500">@diegosilva77</a>
                            com mais 5 pessoas
                        </div>
                    </fieldset>
                    <fieldset class="bg-white shadow-lg border border-gray-300 rounded-xl p-5 flex flex-col gap-y-3">
                        <legend class="text-gray-600">14/05/2025</legend>
                        <div class="text-gray-600">
                            <i class="fa-solid fa-people-group me-1 border border-gray-300 px-2 py-2.5 rounded-full"></i>
                            Participou de bora de
                            <span class="font-bold italic">Futebol</span> de
                            <a href="" class="text-cyan-500">@fabriciols</a>
                            com mais 8 pessoas
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>

@endsection
