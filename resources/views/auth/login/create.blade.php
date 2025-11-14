@extends('layouts.auth')
@section('pageTitle', 'Login')
@section('content')

    <section class="font-md min-h-screen">
        <div class="grid md:grid-cols-2 min-h-screen">
            <div class="relative flex flex-col justify-center p-12 text-white text-center">
                <div
                    class="absolute top-0 left-0 h-full w-full animate-auth-bg z-[-1] bg-linear-to-br from-cyan-300 via-cyan-500 to-cyan-900">
                </div>
                <a class="flex justify-center items-center" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logos/logo-white.png') }}" alt="logo"
                        class="max-w-[50px] object-cover" />
                    <h3 class="italic text-4xl font-bold">BoraRachão</h3>
                </a>
                <hr class="bg-white opacity-50 my-4" />
                <h3 class="text-lg mb-3 uppercase font-light">
                    Que bom ter você de volta aqui
                </h3>
                <h2 class="font-bold text-3xl md:text-4xl mb-5">
                    <i class="fa-solid fa-door-open me-3"></i>
                    Faça seu login
                </h2>
                <p>
                    Sua plataforma de rachões e encontros esportivos. Junte-se a nós e
                    participe de competições incríveis. BoraRachão!
                </p>
            </div>
            <div class="flex flex-col justify-center p-4 md:p-12 lg:px-16 bg-white">
                <form action="#" id="form_login">
                    <div class="flex flex-col gap-y-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="email">
                                <i class="fa-solid fa-envelope text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                                Email
                            </label>
                            <input id="email" name="email" type="email" placeholder="Digite seu endereço de email"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="email">
                                O campo precisa ser preenchido corretamente.
                            </p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-gray-700 text-md" for="password">
                                <i
                                    class="fa-solid fa-lock text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                                Senha
                            </label>
                            <input id="password" name="password" type="password" placeholder="Digite sua senha"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="password">
                                O campo precisa ser preenchido corretamente.
                            </p>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="mt-4 w-full bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5">
                            Entrar
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
                <div class="flex justify-between pt-6 text-sm text-gray-600">
                    <a href="forgot-password.html" class="hover:text-cyan-500 duration-300 ease-in-out">
                        Esqueci a minha senha
                    </a>
                    <a href="{{ route('auth.register') }}" class="hover:text-cyan-500 duration-300 ease-in-out">
                        Criar uma conta
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
