@extends('layouts.app')
@section('pageTitle', 'Criar meu Bora!')
@section('content')
<section class="container mx-auto my-15">
      <form
        method="POST"
        action="{{ route('events.store') }}"
        id="form-create-match"
        class="rounded-2xl shadow-lg border border-gray-300 border-l-8 border-l-cyan-500"
      >
        @csrf
        <!-- Título -->
        <div class="basis-full my-6 mx-7">
          <p
            class="text-2xl text-gray-700 border-b border-b-gray-300 pb-5 font-bold"
          >
            <i class="fa-solid fa-forward mx-2"></i>
            Criar um novo
            <span class="text-cyan-500 italic font-extrabold">BORA !</span>
          </p>
        </div>

        <div class="grid lg:grid-cols-3">
          <!-- Inputs do Formulário -->
          <div class="col-span-2">
            <div
              class="flex flex-col lg:grid lg:grid-cols-6 gap-x-4 gap-y-6 mx-3 lg:mx-6"
            >
              <!-- Esporte select -->
              <div class="flex flex-col col-span-2 gap-1.5">
                <label class="text-gray-700 text-md" for="select">
                  <i
                    class="fa-solid fa-trophy text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"
                  ></i>
                  Esporte
                </label>
                <select
                  id="sport"
                  placeholder="Escolha a opção..."
                  type="text"
                  class="shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                >
                  <option value="" disabled>Selecione um esporte</option>
                  <option value="value1">Futebol</option>
                  <option value="value2">Vôlei</option>
                  <option value="value3">Basquete</option>
                  <option value="value4">Beach Tennis</option>
                  <option value="value5">Futevôlei</option>
                  <option value="value6">Ciclismo</option>
                  <option value="value7">Corrida</option>
                  <option value="value8">Skate</option>
                  <option value="value9">Boxe</option>
                  <option value="value10">Jiu-Jitsu</option>
                  <option value="value11">Parkour</option>
                  <option value="value12">Sinuca</option>
                  <option value="value13">Tênis de Mesa</option>
                  <option value="value14">Handeball</option>
                  <option value="value15">Calistenia</option>
                </select>
                <p
                  class="text-xs leading-4 text-red-500 -mt-1 hidden"
                  data-error="name"
                >
                  O campo precisa ser preenchido.
                </p>
              </div>

              <!-- Nome do Bora -->
              <div class="flex flex-col col-span-4 gap-1.5">
                <label class="text-gray-700 text-md" for="name">
                  <i
                    class="fa-solid fa-pen-clip text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"
                  ></i>
                  Nome do Bora
                </label>
                <input
                  id="name"
                  placeholder="Ex: Volêi no Kartódromo"
                  type="text"
                  class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                />
                <p
                  class="text-xs leading-4 text-red-500 -mt-1 hidden"
                  data-error="name"
                >
                  O campo precisa ser preenchido corretamente.
                </p>
              </div>

              <!-- Hora -->
              <div class="flex flex-col col-span-2 gap-1.5">
                <label class="text-gray-700 text-md" for="hour">
                  <i
                    class="fa-solid fa-clock text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.25"
                  ></i>
                  Hora
                </label>
                <input
                  id="hour"
                  type="time"
                  class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                />
                <p
                  class="text-xs leading-4 text-red-500 -mt-1 hidden"
                  data-error="hour"
                >
                  O campo precisa ser preenchido corretamente.
                </p>
              </div>

              <!-- Data -->
              <div class="flex flex-col col-span-2 gap-1.5">
                <label class="text-gray-700 text-md" for="date">
                  <i
                    class="fa-solid fa-calendar-days text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.5"
                  ></i>
                  Data
                </label>
                <input
                  id="date"
                  type="date"
                  class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                />
                <p
                  class="text-xs leading-4 text-red-500 -mt-1 hidden"
                  data-error="date"
                >
                  O campo precisa ser preenchido corretamente.
                </p>
              </div>

              <!-- Número de participantes -->
              <div class="flex flex-col col-span-2 gap-1.5">
                <label class="text-gray-700 text-md" for="players">
                  <i
                    class="fa-solid fa-user-group text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"
                  ></i>
                  Nº de Participantes
                </label>
                <input
                  id="players"
                  placeholder="12"
                  type="number"
                  min="2"
                  max="30"
                  class="text-center shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                />
                <p
                  class="text-xs leading-4 text-red-500 -mt-1 hidden"
                  data-error="players"
                >
                  O campo precisa ser preenchido corretamente.
                </p>
              </div>

              <!-- Idade mínima -->
              <div class="flex flex-col col-span-2 gap-1.5">
                <label class="text-gray-700 text-md" for="age">
                  <i
                    class="fa-solid fa-triangle-exclamation text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.25"
                  ></i>
                  Idade mínima
                </label>
                <input
                  id="age"
                  placeholder="18"
                  type="number"
                  min="14"
                  class="text-center shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                />
                <p
                  class="text-xs leading-4 text-red-500 -mt-1 hidden"
                  data-error="age"
                >
                  O campo precisa ser preenchido corretamente.
                </p>
              </div>

              <!-- Descrição -->
              <div class="flex flex-col col-span-4 gap-1.5">
                <label class="text-gray-700 text-md" for="description">
                  <i
                    class="fa-solid fa-pen-clip text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"
                  ></i>
                  Descrição
                </label>
                <textarea
                  id="description"
                  placeholder="Ex: É na areia galera, vão de chinelo, e passem protetor solar, está muito sol..."
                  type="text"
                  name="description"
                  rows="4"
                  maxlength="500"
                  class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                ></textarea>
                <p
                  class="text-xs leading-4 text-red-500 -mt-1 hidden"
                  data-error="description"
                >
                  O campo precisa ser preenchido corretamente.
                </p>
              </div>

              <!-- Fieldset -->
              <div class="flex flex-col col-span-6 mb-6">
                <fieldset
                  class="shadow-lg border border-gray-300 p-5 rounded-2xl"
                >
                  <legend class="text-gray-700 text-md">
                    <i
                      class="fa-solid fa-map-location-dot text-sm bg-orange-200 p-2.25 rounded-xl text-orange-500 mr-1"
                    ></i>
                    Endereço
                  </legend>

                  <div class="flex flex-col lg:grid lg:grid-cols-6 gap-3">
                    <!-- CEP -->
                    <div class="flex flex-col gap-1.5 col-span-2">
                      <label class="text-gray-700 text-md" for="cep">
                        <i
                          class="fa-solid fa-map-pin text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-3"
                        ></i>
                        CEP
                      </label>
                      <input
                        id="cep"
                        placeholder="Digite o cep..."
                        type="text"
                        class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                      />
                      <p
                        class="text-xs leading-4 text-red-500 -mt-1 hidden"
                        data-error="cep"
                      >
                        O campo precisa ser preenchido corretamente.
                      </p>
                    </div>

                    <!-- Número -->
                    <div class="flex flex-col gap-1.5 col-span-2">
                      <label class="text-gray-700 text-md" for="number">
                        <i
                          class="fa-solid fa-hashtag text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.5"
                        ></i>
                        Número
                      </label>
                      <input
                        id="number"
                        placeholder="Número"
                        type="text"
                        class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out w-full"
                      />
                      <p
                        class="text-xs leading-4 text-red-500 -mt-1 hidden"
                        data-error="number"
                      >
                        O campo precisa ser preenchido corretamente.
                      </p>
                    </div>

                    <!-- Cidade -->
                    <div class="flex flex-col gap-1.5 col-span-2">
                      <label class="text-gray-700 text-md" for="city">
                        <i
                          class="fa-solid fa-city text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2"
                        ></i>
                        Cidade
                      </label>
                      <select
                        id="city"
                        type="text"
                        class="shadow-sm py-2.5 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out"
                      >
                        <option value="" disabled>Selecione uma cidade</option>
                        <option value="Jaú">Jaú</option>
                        <option value="Bariri">Bariri</option>
                        <option value="Mineiros do Tietê">
                          Mineiros do Tietê
                        </option>
                        <option value="Barra Bonita">Barra Bonita</option>
                        <option value="Bauru">Bauru</option>
                      </select>
                      <p
                        class="text-xs leading-4 text-red-500 -mt-1 hidden"
                        data-error="city"
                      >
                        O campo precisa ser preenchido corretamente.
                      </p>
                    </div>

                    <!-- Rua -->
                    <div class="flex flex-col gap-1.5 col-span-3">
                      <label class="text-gray-700 text-md" for="street">
                        <i
                          class="fa-solid fa-road text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.25"
                        ></i>
                        Rua
                      </label>
                      <input
                        id="street"
                        placeholder="Rua do lugar"
                        type="text"
                        maxlength="255"
                        class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out w-full"
                      />
                      <p
                        class="text-xs leading-4 text-red-500 -mt-1 hidden"
                        data-error="street"
                      >
                        O campo precisa ser preenchido corretamente.
                      </p>
                    </div>

                    <!-- Bairro -->
                    <div class="flex flex-col gap-1.5 col-span-3">
                      <label class="text-gray-700 text-md" for="neighborhood">
                        <i
                          class="fa-solid fa-street-view text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.25"
                        ></i>
                        Bairro
                      </label>
                      <input
                        id="neighborhood"
                        placeholder="Bairro"
                        type="text"
                        maxlength="255"
                        class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700 focus:border-cyan-500 focus:outline-none duration-300 ease-in-out w-full"
                      />
                      <p
                        class="text-xs leading-4 text-red-500 -mt-1 hidden"
                        data-error="neighborhood"
                      >
                        O campo precisa ser preenchido corretamente.
                      </p>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>

          <div class="col-span-2 lg:col-span-1 w-full flex flex-col">
            <!-- Amigos -->
            <div
              class="mx-4 lg:mx-6 mb-6 p-5 rounded-2xl shadow-lg border border-gray-300 border-t-6 border-t-lime-500 h-auto"
            >
              <p class="text-2xl text-gray-700 pb-5 font-bold">
                Chamar amigos para participar:
              </p>

              <div class="flex gap-2 flex-wrap">
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills"
                    value="eullerls"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@eullerls</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills2"
                    value="lucasbardeli"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills2"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@lucasbardeli</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills3"
                    value="joaofran"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills3"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@joaocf</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills4"
                    value="gabiribeiro"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills4"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@gabribeiro</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills5"
                    value="beaamonteiro"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills5"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@beaamonteiro</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills6"
                    value="n4rdelli"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills6"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@n4rdelli</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills7"
                    value="juninh0bw"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills7"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@altairjuninho</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills8"
                    value="elton"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills8"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@elton</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills9"
                    value="pietrodub"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills9"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@pietror45</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills10"
                    value="ronan"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills10"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@ronan</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills11"
                    value="tiagotas"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills11"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@tiagotas</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills12"
                    value="betzfer"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills12"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@betzfer</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills13"
                    value="betzfer"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills13"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@diegosilva77</span>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <!-- Botão -->
            <div class="flex mb-6 mr-7 justify-end mt-auto">
              <button
                type="submit"
                class="bg-lime-500 hover:bg-lime-400 hover:shadow-md hover:shadow-lime-400/50 hover:cursor-pointer text-white m-0 px-4 py-3 rounded-xl flex items-center duration-300 ease-in-out"
              >
                Criar partida <i class="ml-2 fa-solid fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </form>
    </section>
@endsection