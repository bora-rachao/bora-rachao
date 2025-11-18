@extends('layouts.app')
@section('pageTitle', 'Contato')
@section('content')

    <section class="container mx-auto px-4 my-8">
        <div class="lg:p-2 leading-[1.1] border-l-8 border-l-cyan-500">
            <h2 class="ps-2 text-4xl lg:text-[3rem] text-gray-700 font-semibold capitalize">
                contato
            </h2>
        </div>
    </section>

    <section class="py-2 px-4">
        <div class="container mx-auto">
            <div
                class="mb-8 max-w-[clamp(60rem,60rem,75rem)] mx-auto bg-white rounded-2xl shadow-lg border border-gray-300 overflow-hidden">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/3 bg-cyan-600 text-white p-8">
                        <div>
                            <h2 class="text-3xl font-semibold mb-4">Vamos conversar</h2>
                            <p class="mb-6">
                                Preencha o formulário e entraremos em contato o mais breve
                                possível.
                            </p>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-lg mb-2 font-semibold">
                                Horário de atendimento
                            </h3>
                            <p>Segunda a Sexta: 8h às 18h</p>
                            <p>Sábado: 9h às 13h</p>
                            <p>Domingo e Feriado: Fechado</p>
                        </div>
                    </div>

                    <div class="w-full md:w-2/3 p-8">
                        <form action="#" id="form_contact">
                            <div class="flex flex-col gap-y-4">
                                <div class="flex flex-col gap-2">
                                    <label class="w-full block text-gray-700 text-md mb-1" for="name">
                                        <i
                                            class="fa-solid fa-user text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                                        Nome Completo
                                    </label>
                                    <input id="name" name="name" placeholder="Ex: João Pedro Silva"
                                        value="{{ auth()->user()?->name ?? '' }}" type="text"
                                        class="w-full shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                                    <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="name">
                                        O campo precisa ser preenchido corretamente.
                                    </p>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="block text-gray-700 text-md mb-1" for="email">
                                        <i
                                            class="fa-solid fa-envelope text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                                        E-mail
                                    </label>
                                    <input id="email" name="email" placeholder="Ex: joaopedro@gmail.com"
                                        value="{{ auth()->user()?->email ?? '' }}" type="email"
                                        class="w-full shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                                    <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="email">
                                        O campo precisa ser preenchido corretamente.
                                    </p>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="block text-gray-700 text-md mb-1" for="subject">
                                        <i
                                            class="fa-solid fa-pencil text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                                        Assunto
                                    </label>
                                    <input id="subject" name="subject"
                                        placeholder="Ex: Sugestão de melhoria das partidas " type="text"
                                        class="w-full shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                                    <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="subject">
                                        O campo precisa ser preenchido corretamente.
                                    </p>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="block text-gray-700 text-md mb-1" for="message">
                                        <i
                                            class="fa-solid fa-comment text-sm bg-orange-200 p-2 rounded-xl text-orange-500"></i>
                                        Mensagem
                                    </label>
                                    <textarea id="message" name="message" placeholder="Ex: Eu gostaria que as partidas..." rows="4" type="text"
                                        class="w-full shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"></textarea>
                                    <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="message">
                                        O campo precisa ser preenchido corretamente.
                                    </p>
                                </div>
                            </div>
                            <x-general.button title="Enviar mensagem" class="mt-5 w-full justify-center"
                                color="bg-cyan-500 hover:bg-cyan-400 hover:shadow-cyan-400/35"
                                icon="fa-solid fa-paper-plane" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
