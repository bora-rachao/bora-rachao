<aside>
    <div class="grid gap-2 py-4 px-3 rounded-xl border border-gray-200 shadow-sm text-lg">
        <a href="{{ route('users.profile') }}" 
        class="{{ request()->routeIs('users.profile') ? 'text-cyan-500 bg-cyan-500/10 hover:text-cyan-600' : 'text-gray-600' }} py-2 px-3 rounded-xl hover:bg-cyan-500/15 hover:text-cyan-500 duration-300 ease-in-out">
            Perfil
        </a>
        <a href="{{ route('users.avatar') }}" 
        class="{{ request()->routeIs('users.avatar') ? 'text-cyan-500 bg-cyan-500/10 hover:text-cyan-600' : 'text-gray-600' }} py-2 px-3 rounded-xl hover:bg-cyan-500/15 hover:text-cyan-500 duration-300 ease-in-out">
            Imagem de perfil
        </a>
        <a href="{{ route('users.personal') }}" 
        class="{{ request()->routeIs('users.personal') ? 'text-cyan-500 bg-cyan-500/10 hover:text-cyan-600' : 'text-gray-600' }} py-2 px-3 rounded-xl hover:bg-cyan-500/15 hover:text-cyan-500 duration-300 ease-in-out">
            Dados Pessoais
        </a>
        <a href="{{ route('users.password') }}" 
        class="{{ request()->routeIs('users.password') ? 'text-cyan-500 bg-cyan-500/10 hover:text-cyan-600' : 'text-gray-600' }} py-2 px-3 rounded-xl hover:bg-cyan-500/15 hover:text-cyan-500 duration-300 ease-in-out">
            Senha
        </a>
    </div>
</aside>