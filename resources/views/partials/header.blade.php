<!-- logged header -->
@auth
    <header class="shadow bg-white py-3">
        <div class="container mx-auto px-2 flex flex-row flex-wrap items-center justify-between">
            <!-- NAV MOBILE -->
            <nav class="md:hidden">
                <a id="btn_open_menu_mobile" class="hover:cursor-pointer">
                    <i
                        class="fa-solid fa-bars text-lg text-gray-500 py-3 px-3.5 rounded-xl hover:bg-gray-100 duration-300 ease-in-out"></i>
                </a>
                <div id="menu_mobile" class="fixed p-6 w-screen h-screen bg-white z-50 top-0 left-0 hidden">
                    <div class="text-end">
                        <a id="btn_close_menu_mobile" class="hover:cursor-pointer">
                            <i
                                class="fa-solid fa-xmark text-lg text-gray-500 py-3 px-3.5 rounded-xl bg-gray-100 hover:bg-gray-200 duration-300 ease-in-out"></i>
                        </a>
                    </div>
                    <div class="flex flex-col gap-y-3">
                        <h3 class="text-2xl">Menu</h3>
                        <hr class="text-gray-300" />
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-house text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Home
                        </a>
                        <a href="{{ route('general.contact') }}"
                            class="{{ request()->routeIs('general.contact') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-message text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Contato
                        </a>
                        <a href="/app/Views/match/matches.html"
                            class="{{ request()->routeIs('') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-futbol text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Partidas
                        </a>
                        <a href="{{ route('sports') }}"
                            class="{{ request()->routeIs('sports') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-volleyball text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Esportes
                        </a>
                        <a href="{{ route('general.about') }}"
                            class="{{ request()->routeIs('general.about') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-people-group text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Sobre
                        </a>
                        <a href="{{ route('events.index') }}"
                            class="mt-2 text-lg bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-2 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5">
                            Bora Jogar!
                        </a>
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button
                                class="w-full text-lg mt-2 flex items-center justify-center bg-lime-500 hover:bg-lime-400 hover:shadow-md hover:shadow-lime-400/50 hover:cursor-pointer text-white px-4 py-2 rounded-xl duration-300 ease-in-out gap-x-1.5"
                                type="submit">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Sair
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- FIM NAV MOBILE -->
            <div>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logos/logo-bora-rachao-black.png') }}" alt="logo"
                        class="max-w-[175px] object-cover" />
                </a>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Home
                </a>
                <a href="{{ route('general.contact') }}"
                    class="{{ request()->routeIs('general.contact') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Contato
                </a>
                <a href="{{ route('events.index') }}"
                    class="{{ request()->routeIs('events.index') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Partidas
                </a>
                <a href="{{ route('sports') }}"
                    class="{{ request()->routeIs('sports') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Esportes
                </a>
                <a href="{{ route('general.about') }}"
                    class="{{ request()->routeIs('general.about') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Sobre
                </a>
            </nav>
            <div class="flex items-center space-x-3">
                <a href="/app/Views/user/profile.html">
                    @if (auth()->user()->avatar)
                        <img src="{{ asset('storage/avatars' . auth()->user()->avatar) }}"
                            class="w-9 h-9 rounded-full border-2 border-gray-300 hover:border-cyan-500 duration-300 ease-in-out"
                            alt="Profile Photo" />
                    @else
                        <img src="{{ asset('assets/images/default/user.jpg') }}"
                            class="w-9 h-9 rounded-full border-3 border-gray-400 hover:border-cyan-500 duration-300 ease-in-out"
                            alt="Profile Photo" />
                    @endif
                </a>
                <div class="hidden md:flex items-center space-x-3">
                    <a href="{{ route('events.index') }}"
                        class="bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center duration-300 ease-in-out gap-x-1.5">
                        Bora jogar!
                    </a>
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button
                            class="bg-lime-500 hover:bg-lime-400 hover:shadow-md hover:shadow-lime-400/50 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center duration-300 ease-in-out gap-x-1.5"
                            type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sair</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
@endauth

<!-- guest header -->
@guest
    <header class="shadow bg-white py-3">
        <div class="container mx-auto px-2 flex flex-row flex-wrap items-center justify-between">
            <!-- NAV MOBILE -->
            <nav class="md:hidden">
                <a id="btn_open_menu_mobile" class="hover:cursor-pointer">
                    <i
                        class="fa-solid fa-bars text-lg text-gray-500 py-3 px-3.5 rounded-xl hover:bg-gray-100 duration-300 ease-in-out"></i>
                </a>
                <div id="menu_mobile" class="fixed p-6 w-screen h-screen bg-white z-50 top-0 left-0 hidden">
                    <div class="text-end">
                        <a id="btn_close_menu_mobile" class="hover:cursor-pointer">
                            <i
                                class="fa-solid fa-xmark text-lg text-gray-500 py-3 px-3.5 rounded-xl bg-gray-100 hover:bg-gray-200 duration-300 ease-in-out"></i>
                        </a>
                    </div>
                    <div class="flex flex-col gap-y-3">
                        <h3 class="text-2xl">Menu</h3>
                        <hr class="text-gray-300" />
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-house text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Home
                        </a>
                        <a href="{{ route('general.contact') }}"
                            class="{{ request()->routeIs('general.contact') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-message text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Contato
                        </a>
                        <a href="{{ route('events.index') }}"
                            class="{{ request()->routeIs('events.index') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-futbol text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Partidas
                        </a>
                        <a href="{{ route('sports') }}"
                            class="{{ request()->routeIs('sports') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-volleyball text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Esportes
                        </a>
                        <a href="{{ route('general.about') }}"
                            class="{{ request()->routeIs('general.about') ? 'text-gray-700 font-bold' : 'text-gray-700' }}
                                text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out">
                            <i class="fa-solid fa-people-group text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                            Sobre
                        </a>
                        <a href="{{ route('auth.login.create') }}"
                            class="mt-2 text-lg bg-lime-500 hover:bg-lime-400 hover:shadow-md hover:shadow-lime-400/50 hover:cursor-pointer text-white px-4 py-2 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5">
                            Acessar
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{ route('auth.register.create') }}"
                            class="mt-2 text-lg bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-2 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5">
                            <i class="fa-solid fa-plus"></i>
                            Criar uma Conta
                        </a>
                    </div>
                </div>
            </nav>
            <!-- FIM NAV MOBILE -->
            <div>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logos/logo-bora-rachao-black.png') }}" alt="logo"
                        class="max-w-[175px] object-cover" />
                </a>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Home
                </a>
                <a href="{{ route('general.contact') }}"
                    class="{{ request()->routeIs('general.contact') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Contato
                </a>
                <a href="/app/Views/match/matches.html"
                    class="text-gray-800 hover:text-cyan-500 duration-300 ease-in-out">
                    Partidas
                </a>
                <a href="{{ route('sports') }}"
                    class="{{ request()->routeIs('sports') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Esportes
                </a>
                <a href="{{ route('general.about') }}"
                    class="{{ request()->routeIs('general.about') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-800' }} hover:text-cyan-500 duration-300 ease-in-out">
                    Sobre
                </a>
            </nav>
            <div class="hidden md:flex items-center space-x-3">
                <div>
                    <a href="{{ route('auth.register.create') }}"
                        class="bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center duration-300 ease-in-out gap-x-1.5">
                        <i class="fa-solid fa-plus"></i>
                        Criar Conta
                    </a>
                </div>
                <div>
                    <a href="{{ route('auth.login.create') }}"
                        class="bg-lime-500 hover:bg-lime-400 hover:shadow-md hover:shadow-lime-400/50 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center duration-300 ease-in-out gap-x-1.5">
                        Acessar
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
@endguest
