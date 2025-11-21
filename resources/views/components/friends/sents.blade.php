@props(['notification'])

<div class="grid gap-1">
    <div class="text-xl text-gray-700 font-semibold">
        <i class="fa-solid fa-user-plus bg-lime-500/25 text-lime-500 text-xl p-2 py-3 rounded-xl"></i>
        {{ $notification->data['title'] }}
    </div>
    <div class="text-lg">
        {!! $notification->data['message'] !!}
    </div>
    <div class="w-full flex gap-2 justify-end">
        <form action="{{ route('friends.accept', $notification->data['id_friend']) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="mt-4 bg-gray-500 hover:bg-gray-400 hover:shadow-md hover:shadow-gray-500/50 hover:cursor-pointer
                text-white px-4 py-1.5 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5">
                Excluir
            </button>
        </form>
        <form action="{{ route('friends.accept', $notification->data['id_friend']) }}" method="POST">
            @csrf
            <button type="submit"
                class="mt-4 bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer
                text-white px-4 py-1.5 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5">
                Aceitar
                <i class="fa-solid fa-check"></i>
            </button>
        </form>
    </div>
</div>
