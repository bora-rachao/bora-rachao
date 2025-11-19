@extends('layouts.app')
@section('pageTitle', $event->title)
@section('content')
<section class="container mx-auto px-4 my-8">
      <div class="lg:p-2 leading-[1.1] border-l-8 border-l-cyan-500">
        <h2
          class="ps-2 text-4xl lg:text-[3rem] text-gray-700 font-semibold capitalize"
        >
          Detalhes da partida
        </h2>
      </div>
    </section>

    <!-- Criar partida -->
    <section class="container mx-auto my-15">
      <form
        class="rounded-2xl shadow-lg border border-gray-300 border-l-8 border-l-cyan-500"
      >
        <!-- Título -->
        <div
          class="flex flex-col lg:flex-row basis-full justify-between my-6 mx-7 pb-5 text-gray-700 border-b border-b-gray-300"
        >
          <div class="flex flex-col sm:flex-row gap-4 items-center">
            <a href="/app/Views/user/profile.html">
              <img
                src="/resources/assets/images/lucasbardeli.jpg"
                class="w-16 h-16 object-cover rounded-full border-2 border-cyan-500 duration-300 ease-in-out"
                alt="profile image"
              />
            </a>
            <p class="text-2xl font-semibold text-cyan-500">@lucasbardeli</p>
            <p
              class="text-2xl font-semibold text-white bg-lime-500 rounded-lg px-2"
            >
              Volêi no Kartódromo
            </p>
          </div>
          <div class="flex flex-col sm:flex-row items-center my-4.5">
            <p class="px-4">Criada dia: <b>09/06/2025</b></p>
            <p class="px-4">Horário: <b>19:21</b></p>
          </div>
        </div>

        <div class="grid lg:grid-cols-3">
          <!-- Inputs do Formulário -->
          <div class="col-span-2">
            <div class="flex flex-col lg:grid lg:grid-cols-6 gap-x-4 gap-y-6 mx-3 lg:mx-6">
              <!-- Esporte select -->
              <div class="flex flex-col col-span-2 gap-1.5">
                <label class="text-gray-700 text-md" for="select">
                  <i
                    class="fa-solid fa-trophy text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1"
                  ></i>
                  Esporte
                </label>
                <p
                  class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                >
                  Vôlei
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
                <p
                  class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                >
                  18:30
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
                <p
                  class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                >
                  12/06/2025
                </p>
              </div>

              <!-- Idade -->
              <div class="flex flex-col col-span-2 gap-1.5">
                <label class="text-gray-700 text-md" for="age">
                  <i
                    class="fa-solid fa-triangle-exclamation text-sm bg-orange-200 p-2 rounded-xl text-orange-500 mr-1 px-2.25"
                  ></i>
                  Idade
                </label>
                <p
                  class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                >
                  18
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
                <p
                  class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                >
                  É lá na quadra de areia do kartódromo galera, vão de chinelo,
                  levem água pois está calor! Eu levo a bola para jogar.
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
                      <p
                        class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                      >
                        17211478
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
                      <p
                        class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                      >
                        812
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
                      <p
                        class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                      >
                        Jaú
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
                      <p
                        class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                      >
                        Avenida Doutor Quinzinho
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
                      <p
                        class="py-2.5 px-3.5 border-b-2 border-gray-300 text-gray-700"
                      >
                        Jardim Jorge Atalla
                      </p>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>

          <!-- Participantes -->
          <div class="col-span-2 lg:col-span-1 w-full flex flex-col">
            <div
              class="mx-4 lg:mx-6 mb-6 p-5 rounded-2xl shadow-lg border border-gray-300 border-t-6 border-t-lime-500 h-auto"
            >
              <div class="flex text-2xl text-gray-700 pb-5 font-bold">
                <p>Participantes:</p>
                <p class="text-orange-500">
                  <i class="fa-solid fa-users ml-5"></i> 7/8
                </p>
              </div>

              <div class="flex gap-2 flex-wrap">
                <div>
                  <span
                    type="checkbox"
                    id="checkboxPills"
                    value="lucasbardeli"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills"
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
                    id="checkboxPills1"
                    value="eullerls"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills1"
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
                    value="joaofran"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills2"
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
                    id="checkboxPills3"
                    value="beaamonteiro"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills3"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@diegosilva77</span>
                    </div>
                  </label>
                </div>
                <div>
                  <input
                    type="checkbox"
                    id="checkboxPills4"
                    value="n4rdelli"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills4"
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
                    id="checkboxPills5"
                    value="juninh0bw"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills5"
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
                    id="checkboxPills6"
                    value="pietrodub"
                    class="hidden peer"
                    autocomplete="off"
                  />
                  <label
                    for="checkboxPills6"
                    class="inline-flex items-center justify-between px-2 text-neutral-600 border border-transparent bg-neutral-700/30 rounded-full cursor-pointer hover:text-cyan-500 peer-checked:text-cyan-500 peer-checked:bg-cyan-400/30 hover:bg-cyan-400/40 duration-200 ease-in"
                  >
                    <div class="block">
                      <span class="tex font-medium">@pietror45</span>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <!-- Botão -->
            <div class="flex mb-6 mr-7 justify-end mt-auto">
              <a
                href="/app/Views/index.html"
                class="bg-lime-500 hover:bg-lime-400 hover:shadow-md hover:shadow-lime-400/50 hover:cursor-pointer text-white m-0 px-4 py-3 rounded-xl flex items-center duration-300 ease-in-out"
              >
                Se juntar à partida <i class="ml-2 fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </form>
    </section>

@endsection