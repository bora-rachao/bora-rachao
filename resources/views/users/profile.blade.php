@extends('layouts.config')
@section('pageTitle', 'Configuração do Perfil')
@section('content')
    <form action="{{ route('users.profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-y-6 gap-x-6">
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="username">
                    <i class="fa-solid fa-user text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                    Nome de usuário
                </label>
                <input id="username" name="username" type="text" value="{{ old('username', $user->username) }}"
                    placeholder="Digite seu nome de usuário"
                    class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                <x-forms.error name="username" />
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="city">
                    <i class="fa-solid fa-location-dot text-sm bg-orange-200 p-2 px-2.5 rounded-xl text-orange-500"></i>
                    Cidade
                </label>
                <select id="city" name="city" type="text"
                    class="shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out">
                    <option selected disabled>Selecione uma cidade</option>
                    <option value="jaú" @selected(old('city', $user->city) == 'jaú')>Jaú</option>
                    <option value="bauru" @selected(old('city', $user->city) == 'bauru')>Bauru</option>
                    <option value="barra bonita" @selected(old('city', $user->city) == 'barra bonita')>Barra Bonita</option>
                    <option value="itapuí" @selected(old('city', $user->city) == 'itapuí')>Itapuí</option>
                    <option value="bocaina" @selected(old('city', $user->city) == 'bocaina')>Bocaina</option>
                    <option value="mineiros do tietê" @selected(old('city', $user->city) == 'mineiros do tietê')>Mineiros do Tietê</option>
                    <option value="bariri" @selected(old('city', $user->city) == 'bariri')>Bariri</option>
                    <option value="dois córregos" @selected(old('city', $user->city) == 'dois córregos')>Dois Córregos</option>
                    <option value="pederneiras" @selected(old('city', $user->city) == 'pederneiras')>Pederneiras</option>
                </select>
                <x-forms.error name="city" />
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="bio">
                    <i class="fa-solid fa-pencil text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                    Bio
                    <span class="text-xs opacity-50">
                        (250 caracteres)
                    </span>
                </label>
                <textarea id="bio" name="bio" type="text" rows="4" placeholder="Digite seu nome de usuário"
                    class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />{{ old('bio', $user->bio) }}</textarea>
                <x-forms.error name="bio" />
            </div>

        </div>
        <div class="w-full flex justify-end">
            <button type="submit"
                class="mt-4 bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5">
                Salvar
                <i class="fa-solid fa-check"></i>
            </button>
        </div>
    </form>
@endsection
