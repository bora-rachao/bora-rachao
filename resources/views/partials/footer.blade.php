<footer class="py-18 bg-white shadow border-t border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex flex-col justify-center items-center gap-y-2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logos/logo-black-colors.png') }}" alt="Logo BoraRachão"
                    class="w-28 h-28 object-cover" />
            </a>
            <a href="{{ route('home') }}"
                class="text-gray-600 font-bold hover:text-cyan-500 text-lg duration-300 ease-in-out text-center">
                BoraRachão &copy;
            </a>
        </div>
        <nav class="flex flex-col md:flex-row items-center justify-center mt-12 gap-5 gap-x-8">
            <a href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-500' }} hover:text-cyan-500 duration-300 ease-in-out">
                Home
            </a>
            <a href="{{ route('general.contact') }}"
                class="{{ request()->routeIs('general.contact') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-500' }} hover:text-cyan-500 duration-300 ease-in-out">
                Contato
            </a>
            <a href="/app/Views/general/about.html" class="text-gray-500 hover:text-cyan-500 duration-300 ease-in-out">
                Sobre
            </a>
            <a href="/app/Views/general/privacy-policy.html"
                class="text-gray-500 hover:text-cyan-500 duration-300 ease-in-out">
                Política de Privacidade
            </a>
            <a href="{{ route('general.terms-of-use') }}"
                class="{{ request()->routeIs('general.terms-of-use') ? 'text-cyan-500 font-bold hover:text-cyan-600' : 'text-gray-500' }} hover:text-cyan-500 duration-300 ease-in-out">
                Termos de Uso
            </a>
        </nav>
        <div class="flex justify-center gap-x-4 mt-9">
            <a href="https://www.instagram.com/"
                class="bg-pink-500/40 py-1 px-2 rounded-xl text-pink-500 hover:bg-pink-500 duration-300 ease-in-out hover:text-white">
                <i class="fa-brands fa-instagram text-2xl hover:text-white"></i>
            </a>
            <a href="https://www.tiktok.com/"
                class="bg-stone-500/40 py-1 px-2 rounded-xl text-stone-500 hover:bg-stone-950 duration-300 ease-in-out hover:text-white">
                <i class="fa-brands fa-tiktok text-2xl"></i>
            </a>
            <a href="https://www.facebook.com/"
                class="bg-blue-500/40 py-1 px-2 rounded-xl text-blue-500 hover:bg-blue-500 duration-300 ease-in-out hover:text-white">
                <i class="fa-brands fa-square-facebook text-2xl"></i>
            </a>
            <a href="https://x.com/"
                class="bg-stone-600/40 py-1 px-1.5 rounded-xl text-stone-600 hover:bg-stone-950 duration-300 ease-in-out hover:text-white">
                <i class="fa-brands fa-x-twitter text-2xl"></i>
            </a>
            <a href="https://www.linkedin.com/"
                class="bg-sky-500/40 py-1 px-2 rounded-xl text-sky-500 hover:bg-sky-500 duration-300 ease-in-out hover:text-white">
                <i class="fa-brands fa-linkedin text-2xl"></i>
            </a>
        </div>
    </div>
</footer>
