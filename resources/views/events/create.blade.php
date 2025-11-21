@extends('layouts.app')
@section('pageTitle', 'Criar meu Bora!')
@section('content')
    <section class="container mx-auto my-15">
        <form method="POST" action="{{ route('events.store') }}" id="form-create-match"
            class="rounded-2xl shadow-lg border border-gray-300 border-l-8 border-l-cyan-500">
            @csrf
            <!-- Título -->
            <div class="basis-full my-6 mx-7">
                <p class="text-3xl text-gray-700 border-b border-b-gray-300 pb-5 font-bold">
                    <i class="fa-solid fa-forward mx-2"></i>
                    Criar um novo
                    <span class="text-cyan-500 italic font-extrabold">BORA !</span>
                </p>
            </div>

            <div class="grid lg:grid-cols-3">
                <!-- Inputs do Formulário -->
                <div class="col-span-2">
                    <div class="flex flex-col lg:grid lg:grid-cols-6 gap-x-4 gap-y-6 mx-3 lg:mx-6">
                        <!-- Esporte select -->
                        <div class="flex flex-col col-span-2 gap-1.5">
                            <label class="text-gray-700 text-md" for="sport_id">
                                <i class="fa-solid fa-trophy text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"></i>
                                Esporte
                            </label>
                            <select name="sport_id" id="sport_id" placeholder="Escolha a opção..." type="text"
                                class="shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out">
                                <option value="" disabled>Selecione um esporte</option>
                                @foreach ($sports as $sport)
                                    <option value="{{ $sport->id_sport }}" @selected(old('sport_id') == $sport->id_sport)>
                                        {{ $sport->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-forms.error name="sport_id" />
                        </div>

                        <!-- Nome do Bora -->
                        <div class="flex flex-col col-span-4 gap-1.5">
                            <label class="text-gray-700 text-md" for="title">
                                <i
                                    class="fa-solid fa-pen-clip text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"></i>
                                Nome do Bora
                            </label>
                            <input name="title" id="title" value="{{ old('title') }}"
                                placeholder="Ex: Volêi no Kartódromo" type="text"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            <x-forms.error name="title" />
                        </div>

                        <div class="flex flex-col col-span-2 gap-1.5">
                            <label class="text-gray-700 text-md" for="visibility">
                                <i class="fa-solid fa-eye text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"></i>
                                Visibilidade
                            </label>
                            <select name="visibility" id="visibility" placeholder="Escolha a opção..." type="text"
                                class="shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out">
                                <option value="" disabled>Selecione uma visibilidade</option>
                                <option value="public" @selected(old('visibility') === 'public')>Aberto</option>
                                <option value="only_friends" @selected(old('visibility') === 'only_friends')>Apenas amigos</option>
                            </select>
                            <x-forms.error name="visibility" />
                        </div>

                        <!-- Data -->
                        <div class="flex flex-col col-span-2 gap-1.5">
                            <label class="text-gray-700 text-md" for="event_date">
                                <i
                                    class="fa-solid fa-calendar-days text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.5"></i>
                                Data
                            </label>
                            <input name="event_date" id="event_date" type="datetime-local" value="{{ old('event_date') }}"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            <x-forms.error name="event_date" />
                        </div>

                        <!-- Número de participantes -->
                        <div class="flex flex-col col-span-2 gap-1.5">
                            <label class="text-gray-700 text-md" for="max_players">
                                <i
                                    class="fa-solid fa-user-group text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"></i>
                                Nº de Participantes
                                <span class="text-gray-400 italic text-xs">(incluindo você)</span>
                            </label>
                            <input name="max_players" id="max_players" placeholder="12" type="number" min="2"
                                max="30" value="{{ old('max_players') }}"
                                class="text-center shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            <x-forms.error name="max_players" />
                        </div>

                        <!-- Idade mínima -->
                        <div class="flex flex-col col-span-2 gap-1.5">
                            <label class="text-gray-700 text-md" for="min_age">
                                <i
                                    class="fa-solid fa-triangle-exclamation text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.25"></i>
                                Idade mínima
                            </label>
                            <input name="min_age" id="min_age" placeholder="18" type="number" min="14"
                                max="100" value="{{ old('min_age', 14) }}"
                                class="text-center shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                            <x-forms.error name="min_age" />
                        </div>

                        <!-- Descrição -->
                        <div class="flex flex-col col-span-4 gap-1.5">
                            <label class="text-gray-700 text-md" for="description">
                                <i
                                    class="fa-solid fa-pen-clip text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"></i>
                                Descrição
                            </label>
                            <textarea id="description"
                                placeholder="Ex: É na areia galera, vão de chinelo, e passem protetor solar, está muito sol..." type="text"
                                name="description" rows="4" maxlength="500"
                                class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out">{{ old('description', '') }}</textarea>
                            <x-forms.error name="description" />
                        </div>

                        <!-- Fieldset -->
                        <div class="flex flex-col col-span-6 mb-6">
                            <fieldset class="shadow-lg border border-gray-300 p-5 rounded-2xl">
                                <legend class="text-gray-700 text-md">
                                    <i
                                        class="fa-solid fa-map-location-dot text-sm bg-orange-200 p-2.25 rounded-xl text-orange-500 mr-1"></i>
                                    Endereço
                                </legend>

                                <div class="flex flex-col lg:grid lg:grid-cols-6 gap-3">
                                    
                                    <div class="flex flex-col gap-1.5 col-span-2">
                                        <label class="text-gray-700 text-md" for="zip_code">
                                            <i
                                                class="fa-solid fa-map-pin text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-3"></i>
                                            CEP
                                        </label>
                                        <input name="zip_code" id="zip_code" placeholder="Digite o cep..." type="text" value="{{ old('zip_code') }}"
                                            class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out" />
                                        <x-forms.error name="zip_code" />
                                    </div>

                                    <div class="flex flex-col gap-1.5 col-span-2">
                                        <label class="text-gray-700 text-md" for="house_number">
                                            <i
                                                class="fa-solid fa-hashtag text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.5"></i>
                                            Número
                                        </label>
                                        <input name="house_number" id="house_number" placeholder="Número" type="text" value="{{ old('house_number') }}"
                                            class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out w-full" />
                                        <x-forms.error name="house_number" />
                                    </div>
=
                                    <div class="flex flex-col gap-1.5 col-span-2">
                                        <label class="text-gray-700 text-md" for="city">
                                            <i
                                                class="fa-solid fa-city text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2"></i>
                                            Cidade
                                        </label>
                                        <select id="city" type="text"
                                            class="shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out">
                                            <option value="" disabled>Selecione uma cidade</option>
                                            <option value="Jaú">Jaú</option>
                                            <option value="Bariri">Bariri</option>
                                            <option value="Mineiros do Tietê">
                                                Mineiros do Tietê
                                            </option>
                                            <option value="Barra Bonita">Barra Bonita</option>
                                            <option value="Bauru">Bauru</option>
                                        </select>
                                        <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="city">
                                            O campo precisa ser preenchido corretamente.
                                        </p>
                                    </div>

                                    <div class="flex flex-col gap-1.5 col-span-3">
                                        <label class="text-gray-700 text-md" for="street">
                                            <i
                                                class="fa-solid fa-road text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.25"></i>
                                            Rua
                                        </label>
                                        <input id="street" placeholder="Rua do lugar" type="text" maxlength="255"
                                            class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out w-full" />
                                        <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="street">
                                            O campo precisa ser preenchido corretamente.
                                        </p>
                                    </div>

                                    <div class="flex flex-col gap-1.5 col-span-3">
                                        <label class="text-gray-700 text-md" for="neighborhood">
                                            <i
                                                class="fa-solid fa-street-view text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.25"></i>
                                            Bairro
                                        </label>
                                        <input id="neighborhood" placeholder="Bairro" type="text" maxlength="255"
                                            class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out w-full" />
                                        <p class="text-xs leading-4 text-red-500 -mt-1 hidden" data-error="neighborhood">
                                            O campo precisa ser preenchido corretamente.
                                        </p>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 lg:col-span-1 w-full flex flex-col">
                    <div
                        class="mx-4 lg:mx-6 mb-6 p-5 rounded-2xl shadow-lg border border-gray-300 border-t-6 border-t-lime-500 h-auto">
                        <p class="text-2xl text-gray-700 pb-5 font-bold">
                            Chamar amigos para participar:
                        </p>

                        <div class="flex gap-2 flex-wrap">
                            <div>
                                <input type="checkbox" id="checkboxPills" value="eullerls" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@eullerls</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills2" value="lucasbardeli" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills2"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@lucasbardeli</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills3" value="joaofran" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills3"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@joaocf</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills4" value="gabiribeiro" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills4"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@gabribeiro</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills5" value="beaamonteiro" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills5"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@beaamonteiro</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills6" value="n4rdelli" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills6"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@n4rdelli</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills7" value="juninh0bw" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills7"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@altairjuninho</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills8" value="elton" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills8"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@elton</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills9" value="pietrodub" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills9"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@pietror45</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills10" value="ronan" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills10"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@ronan</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills11" value="tiagotas" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills11"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@tiagotas</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills12" value="betzfer" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills12"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@betzfer</span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" id="checkboxPills13" value="betzfer" class="hidden peer"
                                    autocomplete="off" />
                                <label for="checkboxPills13"
                                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in">
                                    <div class="block">
                                        <span class="tex font-medium">@diegosilva77</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Botão -->
                    <div class="flex mb-6 mr-7 justify-end mt-auto">
                        <button type="submit"
                            class="bg-lime-500 hover:bg-lime-400 hover:shadow-md hover:shadow-lime-400/50 hover:cursor-pointer text-white m-0 px-4 py-3 rounded-xl flex items-center duration-300 ease-in-out">
                            Criar partida <i class="ml-2 fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
