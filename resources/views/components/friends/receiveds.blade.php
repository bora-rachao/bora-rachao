@props(['received'])

<div class="grid gap-1">
    <div class="text-xl text-gray-700 font-semibold">
        <a href="{{ route('profiles.view', $received->user->username) }}" class="flex gap-1.5 items-center">
            <img src="{{ $received->user->avatar ? asset('storage/assets/images/users/' . $received->user->avatar) : asset('assets/images/default/user.jpg') }}"
                class="size-10 object-cover rounded-full border-2 border-gray-400 duration-300 ease-in-out"
                alt="profile image" />
            <p class="text-cyan-500 text-2xl font-semibold">
                {{ '@' . $received->user->username }}
            </p>
            <div class="flex items-center gap-1 text-md bg-lime-500/25 text-lime-500 px-2 py-0.5 rounded-xl">
                <i class="text-sm fa-solid fa-location-dot"></i>
                {{ $received->user->city }}
            </div>
        </a>
    </div>
    <div class="w-full flex gap-2 justify-end">
        <form action="{{ route('friends.accept', $received->user->username) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="mt-4 bg-gray-500 hover:bg-gray-400 hover:shadow-md hover:shadow-gray-500/50 hover:cursor-pointer
                text-white px-4 py-1.5 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5">
                Excluir
            </button>
        </form>
        <form action="{{ route('friends.accept', $received->user->username) }}" method="POST">
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
