@extends('layouts.auth')
@section('pageTitle', 'Criar conta')
@section('content')
    <section class="font-md">
        <div class="grid lg:grid-cols-2 min-h-screen">
            <div class="flex flex-col justify-center p-4 md:p-12 lg:px-16 bg-white order-last lg:order-first">
                <form action="{{ route('auth.store') }}" id="form_register" method="POST">
                    @csrf
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-y-6 gap-x-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="name">
                                <i class="fa-solid fa-pencil text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                                Nome completo
                            </label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}"
                                placeholder="Digite seu nome completo"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            @error('name')
                                <p class="text-xs leading-4 text-red-500 -mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="email">
                                <i class="fa-solid fa-envelope text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                                Email
                            </label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}"
                                placeholder="Digite seu melhor email"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            @error('email')
                                <p class="text-xs leading-4 text-red-500 -mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="password">
                                <i
                                    class="fa-solid fa-lock text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                                Senha
                            </label>
                            <input id="password" name="password" type="password" value="{{ old('password') }}"
                                placeholder="Crie uma senha segura"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            @error('password')
                                <p class="text-xs leading-4 text-red-500 -mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="password_confirmation">
                                <i
                                    class="fa-solid fa-lock text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                                Confirme a Senha
                            </label>
                            <input id="password_confirmation" name="password_confirmation" type="password"
                                value="{{ old('password_confirmation') }}" placeholder="Repita a sua senha"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            @error('password_confirmation')
                                <p class="text-xs leading-4 text-red-500 -mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="document">
                                <i
                                    class="fa-solid fa-id-card text-sm bg-orange-200 p-2 px-1.75 rounded-xl text-orange-500"></i>
                                CPF
                            </label>
                            <input id="document" name="document" type="text" value="{{ old('document') }}"
                                placeholder="Digite seu CPF"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            @error('document')
                                <p class="text-xs leading-4 text-red-500 -mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="date_of_birth">
                                <i
                                    class="fa-solid fa-cake-candles text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                                Aniversário
                            </label>
                            <input id="date_of_birth" name="date_of_birth" type="date"
                                value="{{ old('date_of_birth') }}"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            @error('date_of_birth')
                                <p class="text-xs leading-4 text-red-500 -mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="city">
                                <i
                                    class="fa-solid fa-location-dot text-sm bg-orange-200 p-2 px-2.5 rounded-xl text-orange-500"></i>
                                Cidade
                            </label>
                            <select id="city" name="city" type="text" 
                                class="shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out">
                                <option selected disabled>Selecione uma cidade</option>
                                <option value="jaú" @selected((old('city') == 'jaú'))>Jaú</option>
                                <option value="bauru" @selected((old('city') == 'bauru'))>Bauru</option>
                                <option value="barra bonita" @selected((old('city') == 'barra bonita'))>Barra Bonita</option>
                                <option value="itapuí" @selected((old('city') == 'itapuí'))>Itapuí</option>
                                <option value="bocaina" @selected((old('city') == 'bocaina'))>Bocaina</option>
                                <option value="mineiros do tietê" @selected((old('city') == 'mineiros do tietê'))>Mineiros do Tietê</option>
                                <option value="bariri" @selected((old('city') == 'bariri'))>Bariri</option>
                                <option value="dois córregos" @selected((old('city') == 'dois córregos'))>Dois Córregos</option>
                                <option value="pederneiras" @selected((old('city') == 'pederneiras'))>Pederneiras</option>
                            </select>
                            @error('city')
                                <p class="text-xs leading-4 text-red-500 -mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="gender">
                                <i
                                    class="fa-solid fa-venus-mars text-sm bg-orange-200 p-2 px-1.5 rounded-xl text-orange-500"></i>
                                Gênero
                            </label>
                            <select id="gender" name="gender" type="text"
                                class="shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out">
                                <option selected disabled>Selecione um gênero</option>
                                <option value="male"  @selected((old('gender') == 'male'))>Masculino</option>
                                <option value="female" @selected((old('gender') == 'female'))>Feminino</option>
                                <option value="other"  @selected((old('gender') == 'other'))>Outro</option>
                            </select>
                            @error('gender')
                                <p class="text-xs leading-4 text-red-500 -mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="mt-8 w-full justify-center bg-orange-500 hover:bg-orange-400 hover:shadow-md hover:shadow-orange-400/50 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center duration-300 ease-in-out gap-x-1.5">
                            Criar conta
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
                <div class="flex justify-between pt-6 text-sm text-gray-600">
                    <a href="{{ route('auth.login.create') }}" class="hover:text-cyan-500 duration-300 ease-in-out">
                        Já tenho uma conta
                    </a>
                </div>
            </div>
            <div class="relative flex flex-col justify-center p-12 text-white text-center">
                <div
                    class="absolute top-0 left-0 h-full w-full animate-auth-bg z-[-1] bg-linear-to-bl from-red-500 to-orange-600">
                </div>
                <a class="flex justify-center items-center" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logos/logo-white.png') }}" alt="logo"
                        class="max-w-[50px] object-cover" />
                    <h3 class="italic text-4xl font-bold">BoraRachão</h3>
                </a>
                <hr class="bg-white opacity-50 my-4" />
                <h3 class="text-lg mb-3 uppercase font-light">
                    Vamos te conhecer melhor
                </h3>
                <h2 class="font-bold text-3xl md:text-4xl mb-5">
                    <i class="fa-solid fa-user-plus me-3"></i>
                    Crie a sua conta
                </h2>
                <p>
                    Cadastre-se agora e descubra partidas perto de você. Não fique de
                    fora do próximo rachão. BoraRachão!
                </p>
            </div>
        </div>
    </section>
@endsection
