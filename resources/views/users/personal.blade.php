@extends('layouts.config')
@section('pageTitle', 'Configuração de Dados Pessoais')
@section('content')
    <form action="{{ route('users.personal.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-y-6 gap-x-6">
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="name">
                    <i class="fa-solid fa-user text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                    Nome completo
                </label>
                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" disabled
                    placeholder="Nome completo"
                    class="disabled:opacity-50 shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                <x-forms.error name="name" />
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="document">
                    <i class="fa-solid fa-id-card text-sm bg-orange-200 p-2 px-1.75 rounded-xl text-orange-500"></i>
                    CPF
                </label>
                <input id="document" name="document" type="text" value="{{ old('document', $user->document) }}" disabled
                    placeholder="Digite seu CPF"
                    class="disabled:opacity-50 shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                <x-forms.error name="document" />
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="gender">
                    <i class="fa-solid fa-venus-mars text-sm bg-orange-200 p-2 px-1.5 rounded-xl text-orange-500"></i>
                    Gênero
                </label>
                <select id="gender" name="gender" type="text" disabled
                    class="disabled:opacity-50 shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out">
                    <option selected disabled>Selecione um gênero</option>
                    <option value="male" @selected(old('gender', $user->gender) == 'male')>Masculino</option>
                    <option value="female" @selected(old('gender', $user->gender) == 'female')>Feminino</option>
                    <option value="other" @selected(old('gender', $user->gender) == 'other')>Outro</option>
                </select>
                <x-forms.error name="gender" />
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="date_of_birth">
                    <i class="fa-solid fa-cake-candles text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                    Aniversário
                </label>
                <input id="date_of_birth" name="date_of_birth" type="date"
                    value="{{ old('date_of_birth', $user->date_of_birth) }}" disabled
                    class="disabled:opacity-50 shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                <x-forms.error name="date_of_birth" />
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="email">
                    <i class="fa-solid fa-envelope text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                    Email
                </label>
                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                    placeholder="Digite seu melhor email"
                    class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                <x-forms.error name="email" />
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
