@extends('layouts.app')
@section('pageTitle', 'Termos de Uso')
@section('content')

    <!--Title section-->
    <section class="container mx-auto px-4 my-8">
        <div class="lg:p-2 leading-[1.1] border-l-8 border-l-cyan-500">
            <h2 class="ps-2 text-4xl lg:text-[3rem] text-gray-700 font-semibold">
                Termos de Uso
            </h2>
        </div>
    </section>

    <!-- Conteúdo principal -->
    <section class="max-w-4xl mx-auto mb-18 bg-white p-8 mt-10 shadow rounded-xl">
        <div class="text-gray-600">
            <h2 class="text-2xl font-semibold text-gray-700 py-3">
                Nossos Termos de Uso
            </h2>
            <p>
                Bem-vindo ao <strong>BoraRachão</strong>! Ao acessar ou usar nossa
                plataforma, você concorda com os seguintes termos e condições. Leia
                atentamente antes de continuar.
            </p>

            <h3 class="text-2xl font-semibold text-gray-700 py-3">
                1. Objetivo da Plataforma
            </h3>
            <p>
                O site tem como finalidade conectar jogadores interessados em marcar
                partidas esportivas de forma prática e organizada. A responsabilidade
                pela criação, confirmação e comparecimento às partidas é
                exclusivamente dos usuários.
            </p>

            <h3 class="text-2xl font-semibold text-gray-700 py-3">
                2. Cadastro e Responsabilidades
            </h3>
            <p>
                Para utilizar a plataforma, é necessário realizar um cadastro com
                informações verídicas. O usuário é responsável por manter seus dados
                atualizados e respeitar os demais participantes das partidas.
            </p>

            <h3 class="text-2xl font-semibold text-gray-700 py-3">
                3. Conduta do Usuário
            </h3>
            <p>
                É proibido o uso da plataforma para fins ilícitos, ofensivos ou que
                promovam qualquer tipo de discriminação. Usuários que descumprirem
                essas regras poderão ser banidos sem aviso prévio.
            </p>

            <h3 class="text-2xl font-semibold text-gray-700 py-3">
                4. Cancelamentos e Pontualidade
            </h3>
            <p>
                Ao confirmar presença em uma partida, o usuário se compromete a
                comparecer. Cancelamentos frequentes ou atrasos podem afetar sua
                reputação na comunidade.
            </p>

            <h3 class="text-2xl font-semibold text-gray-700 py-3">
                5. Isenção de Responsabilidade
            </h3>
            <p>
                O <strong>BoraRachão</strong> é apenas um facilitador de encontros
                esportivos entre usuários. Não nos responsabilizamos por quaisquer
                danos, acidentes ou conflitos que ocorram durante ou após os jogos.
            </p>

            <h3 class="text-2xl font-semibold text-gray-700 py-3">
                6. Modificações nos Termos
            </h3>
            <p>
                Reservamo-nos o direito de alterar estes Termos de Uso a qualquer
                momento. Recomendamos que os usuários revisitem esta página
                periodicamente.
            </p>

            <h3 class="text-2xl font-semibold text-gray-700 py-3">7. Contato</h3>
            <p>
                Em caso de dúvidas ou denúncias, entre em
                <a href="/app/Views/general/contact.html" class="text-cyan-500 hover:underline">contato conosco</a>.
            </p>
            <p class="mt-6 text-sm text-gray-500">
                Última atualização: Junho de 2025
            </p>
        </div>
    </section>

@endsection
