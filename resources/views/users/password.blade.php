@extends('layouts.config')
@section('pageTitle', 'Configuração de Senha')
@section('content')
    <form action="{{ route('users.password.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-y-6 gap-x-6">
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="password">
                    <i class="fa-solid fa-lock text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                    Nova senha
                </label>
                <input id="password" name="password" type="password" value="{{ old('password') }}"
                    placeholder="Crie uma senha segura"
                    class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                <x-forms.error name="password" />
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="password_confirmation">
                    <i class="fa-solid fa-lock text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                    Confirme a Senha
                </label>
                <input id="password_confirmation" name="password_confirmation" type="password"
                    value="{{ old('password_confirmation') }}" placeholder="Repita a sua senha"
                    class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                <x-forms.error name="password_confirmation" />
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
