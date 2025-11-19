@extends('layouts.app')
@section('pageTitle', 'Partidas')
@section('content')
    <section class="my-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap flex-row items-center mb-6 gap-3">
                <h2 class="text-2xl text-gray-500 font-semibold">
                    <i class="fa-solid fa-basketball"></i>
                    Encontre alguma partida!
                </h2>
                <a href="{{ route('events.create') }}"
                    class="bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center duration-300 ease-in-out gap-x-1.5">
                    Criar meu Bora!
                </a>
            </div>
            <div class="flex flex-wrap gap-y-2.5 gap-x-3">
                <div>
                    <input type="checkbox" id="futebol" value="futebol" class="hidden peer" autocomplete="off" />
                    <label for="futebol"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-futbol"></i>
                                Futebol
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="basquete" value="basquete" class="hidden peer" autocomplete="off" />
                    <label for="basquete"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-basketball"></i>
                                Basquete
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="vôlei" value="vôlei" class="hidden peer" autocomplete="off" />
                    <label for="vôlei"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-volleyball"></i>
                                Vôlei
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="futevôlei" value="futevôlei" class="hidden peer" autocomplete="off" />
                    <label for="futevôlei"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-futbol"></i>
                                Futevôlei
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="tenis" value="tênis" class="hidden peer" autocomplete="off" />
                    <label for="tenis"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-baseball"></i>
                                Tênis
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="beach_tennis" value="beach tennis" class="hidden peer" autocomplete="off" />
                    <label for="beach_tennis"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                                Beach Tennis
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="ciclismo" value="ciclismo" class="hidden peer" autocomplete="off" />
                    <label for="ciclismo"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-person-biking"></i>
                                Ciclismo
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="corrida" value="corrida" class="hidden peer" autocomplete="off" />
                    <label for="corrida"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-person-running"></i>
                                Corrida
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="skate" value="skate" class="hidden peer" autocomplete="off" />
                    <label for="skate"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-person-snowboarding"></i>
                                Skate
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="boxe" value="boxe" class="hidden peer" autocomplete="off" />
                    <label for="boxe"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-people-robbery"></i>
                                Boxe
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="jiu_jitsu" value="jiu-jitsu" class="hidden peer" autocomplete="off" />
                    <label for="jiu_jitsu"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-people-pulling"></i>
                                Jiu-Jitsu
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="parkour" value="parkour" class="hidden peer" autocomplete="off" />
                    <label for="parkour"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-person-running"></i>
                                Parkour
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="sinuca" value="sinuca" class="hidden peer" autocomplete="off" />
                    <label for="sinuca"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-bowling-ball"></i>
                                Sinuca
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="tenis_de_mesa" value="tênis de mesa" class="hidden peer"
                        autocomplete="off" />
                    <label for="tenis_de_mesa"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                                Tênis de Mesa
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="handeball" value="handeball" class="hidden peer" autocomplete="off" />
                    <label for="handeball"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-futbol"></i>
                                Handeball
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="calistenia" value="calistenia" class="hidden peer" autocomplete="off" />
                    <label for="calistenia"
                        class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                        <div class="block">
                            <span class="tex font-medium">
                                <i class="fa-solid fa-dumbbell"></i>
                                Calistenia
                            </span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </section>
    <section class="my-8">
        <div class="container mx-auto px-4">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-3 gap-y-4">
                <div>
                    @foreach ($events as $event)
                    <a href="{{ route('events.view', $event->id_event) }}">
                  <div class="bg-white text-gray-700 shadow-lg border border-gray-300 px-3 py-2 rounded-2xl hover:scale-[1.02] duration-300 ease-in-out">
                      <span
                          class="font-semibold capitalize text-start text-white bg-lime-500 rounded-lg px-2"
                          >bora {{ $event->sport->name }}
                          </span>
                      <div class="flex items-center justify-start space-x-1 mt-1">
                          @if ($event->user->avatar)
                              <img
                          src="{{ $event->user->avatar }}"
                          class="w-8 h-8 rounded-full border-2 border-gray-300 object-cover "
                          alt="{{ $event->user->username }}"
                          />
                          @else
                          <img
                      src="{{ asset('assets/images/default/user.jpg') }}"
                      class="w-8 h-8 rounded-full border-2 border-gray-300 object-cover "
                      alt="{{ $event->user->username }}"
                      />
                            
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
