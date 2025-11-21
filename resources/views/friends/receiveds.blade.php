@extends('layouts.app')
@section('pageTitle', 'Pedidos de Amizade Recebidos')
@section('content')
    <section class="container mx-auto flex flex-col max-w-3xl gap-5 justify-center my-10 px-4">

        <div class="grid gap-4 w-full">
            @forelse ($receiveds as $received)
                <div class="shadow-lg border border-gray-300 rounded-2xl p-4 bg-white w-full">
                    <x-friends.receiveds :received="$received" />
                </div>
            @empty
                <div class="min-h-[150px] w-full flex items-center">
                    <p class="text-gray-500 text-lg">Nenhum pedido de amizade recebido por enquanto.</p>
                </div>
            @endforelse
        </div>

    </section>
@endsection
