@extends('layouts.app')
@section('pageTitle', 'Esportes')
@section('content')
    <!--Title section-->
    <section class="container mx-auto px-4 my-8">
        <div class="lg:p-2 leading-[1.1] border-l-8 border-l-cyan-500">
            <h2 class="ps-2 text-4xl lg:text-[3rem] text-gray-700 font-semibold">
                Todos os Esportes
            </h2>
        </div>
    </section>

    <!--Card section-->
    <section class="container mx-auto grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 my-10 px-4">
        <!-- card do esporte Futebol -->
        <a
            class="relative group rounded-2xl bg-cyan-500 border-b-7 border-l-7 border-b-orange-500 border-l-cyan-500 hover:cursor-pointer hover:scale-[1.02] hover:shadow-lg hover:border-cyan-500 overflow-hidden duration-300 ease-in-out min-h-70 w-full">
            <img class="absolute top-0 left-0 h-full w-full object-cover"
                src="https://clubepaineiras.org.br/wp-content/uploads/2022/05/jogadores.jpg" alt="Futebol" />
            <div
                class="absolute top-0 left-0 h-full w-full bg-linear-to-t from-cyan-600/60 to-black/50 z-10 group-hover:backdrop-blur-sm group-hover:bg-black/65">
            </div>
            <p
                class="absolute group-hover:top-6 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10 text-white leading-8 text-center text-4xl w-full font-semibold italic drop-shadow-lg duration-300 ease-in-out">
                Futebol
            </p>
            <div
                class="absolute top-full group-hover:top-15 w-full group-hover:block z-10 content-center overflow-hidden text-ellipsis duration-300 ease-in-out">
                <p class="text-white text-sm p-2 rounded-lg my-2 mx-3">
                    No futebol, duas equipes de 11 jogadores tentam marcar gols, usando
                    os pés, cabeça ou outras partes do corpo, exceto as mãos. O jogo
                    ocorre em um campo retangular com um gol em cada extremidade.
                </p>
            </div>
        </a>
    </section>
@endsection
