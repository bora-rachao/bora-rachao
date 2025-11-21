@extends('layouts.config')
@section('pageTitle', 'Configuração de Senha')
@section('content')
    <form action="{{ route('users.avatar.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid sm:grid-cols-2 gap-y-6 gap-x-6">
            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="avatar">
                    <i class="fa-solid fa-image text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                    Imagem atual
                </label>

                <div class="flex justify-center">
                    <img id="avatar-preview"
                        src="{{ auth()->user()->avatar ? asset('storage/assets/images/users/' . auth()->user()->avatar) : asset('assets/images/default/user.jpg') }}"
                        class="size-[250px] min-w-[250px] min-h-[250px] rounded-full object-cover border-4 border-gray-300 shadow-lg"
                        alt="{{ $user->username }}" />
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-gray-700 text-md" for="avatar">
                    <i class="fa-solid fa-upload text-sm bg-orange-200 p-2 px-2.25 rounded-xl text-orange-500"></i>
                    Selecionar nova imagem
                </label>

                <input id="avatar" name="avatar" type="file" accept="image/*"
                    class="shadow-sm py-2 px-3.5 border-2 border-gray-300 rounded-xl hover:border-gray-400 text-gray-700
                       focus:border-cyan-500 focus:outline-none duration-300 ease-in-out cursor-pointer bg-white" />

                <x-forms.error name="avatar" />
            </div>

        </div>

        <div class="w-full flex gap-3 justify-end">
            <button id="cancel-avatar-image"
                class="hidden mt-4 bg-red-600 hover:bg-red-500 hover:shadow-md hover:shadow-red-500/50 hover:cursor-pointer
                   text-white px-4 py-1.5 rounded-xl items-center justify-center duration-300 ease-in-out gap-x-1.5">
                Cancelar
                <i class="fa-solid fa-x"></i>
            </button>
            <button type="submit" id="submit-avatar-image"
                class="hidden mt-4 bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer
                   text-white px-4 py-1.5 rounded-xl items-center justify-center duration-300 ease-in-out gap-x-1.5">
                Salvar
                <i class="fa-solid fa-check"></i>
            </button>
        </div>
    </form>

@endsection
@section('js')
    <script>
        const input = document.getElementById('avatar');
        const preview = document.getElementById('avatar-preview');
        const btn = document.getElementById('submit-avatar-image');
        const btnCancel = document.getElementById('cancel-avatar-image');
        const firstImage = preview.src;
        let isDirty = false;

        input.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                isDirty = true;
                showButtons();

                const url = URL.createObjectURL(file);
                preview.src = url;
            }
        });

        function showButtons() {
            if (isDirty) {
                btn.classList.remove('hidden');
                btn.classList.add('flex');

                btnCancel.classList.remove('hidden');
                btnCancel.classList.add('flex');
            }
        }

        function hideButtons() {
            btn.classList.add('hidden');
            btn.classList.remove('flex');

            btnCancel.classList.add('hidden');
            btnCancel.classList.remove('flex');
        }

        function cancelChanges() {
            preview.src = firstImage;
            input.value = "";
            isDirty = false;
            hideButtons();
        }

        btnCancel.addEventListener('click', function(event) {
            event.preventDefault();
            cancelChanges();
        });
    </script>
@endsection
