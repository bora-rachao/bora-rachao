@extends('layouts.app')
@section('pageTitle', 'Sobre')
@section('content')

    <!--Title section-->
    <section class="container mx-auto px-4 my-8">
      <div class="lg:p-2 leading-[1.1] border-l-8 border-l-cyan-500">
        <h2
          class="ps-2 text-4xl lg:text-[3rem] text-gray-700 font-semibold capitalize"
        >
          sobre
        </h2>
      </div>
    </section>

<!--Description section-->
    <section class="container px-4 mx-auto">
      <div class="md:flex items-center group">
        <div
          class="px-4 py-8 border border-gray-300 rounded-4xl shadow-lg bg-white lg:p-10 text-xl text-gray-600 indent-8 text-justify"
        >
          <div class="text-center rounded-lg mb-8">
            <h2 class="text-3xl text-gray-600 antialised">
              Um pouco sobre nós (BoraRachão)
            </h2>
          </div>
          <p>
            Com o Bora Rachão, você organiza seus rachões, escolhe o local,
            define os horários, controla a lista de participantes e até faz
            rateio dos custos, tudo de forma rápida, intuitiva e transparente.
            Aqui, quem joga foca no que realmente importa: o esporte rolando!
          </p>
          <p>
            Nosso propósito é fortalecer a cultura do esporte amador e
            profissional promover integração entre pessoas e facilitar aquele
            encontro semanal com os amigos, seja no futebol, vôlei, basquete, ou
            qualquer outra modalidade.
          </p>
        </div>
        <div>
          <img
            class="md:ms-[-20px] group-hover:md:ms-0 object-cover border-5 border-b-orange-500 border-l-cyan-500 border-r-amber-500 border-t-lime-500 rounded-4xl w-400 duration-300 ease-in-out"
            src='{{ asset('assets/images/team-bora-rachao.jpg') }}'
            alt="Time BoraRachão"
          />
        </div>
      </div>
    </section>

    <!--subtitle section-->
    <section class="container text-center mx-auto rounded-lg mt-20 mb-10">
      <h2 class="text-4xl text-gray-600 antialised p-2 capitalize">
        <i class="fa-solid fa-people-group"></i>
        Nossa equipe
      </h2>
    </section>
    <!--team section-->
    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-2 divide-x-8 divide-gray-300">
        <div class="py-16"></div>
        <div></div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 group">
        <div
          class="px-2 py-4 order-last md:order-first col-span-3 lg:p-10 text-center border border-gray-300 shadow-lg rounded-3xl"
        >
          <h2 class="text-4xl text-start text-gray-600 rounded-xl">
            Euller Lourenço
          </h2>
          <div
            class="bg-gradient-to-r from-lime-500 to-cyan-500 py-0.5 my-3.5 w-full"
          ></div>
          <p class="text-xl text-gray-600 indent-8 text-start">
            Tenho 21 anos e sou estudante do curso de DSM na Fatec Jahu, atuo
            também como Desenvolvedor Full Stack na Labi9. Gosto de aprender
            novas tecnologias e sempre busco aprimorar minhas habilidades. Além
            disso, gosto muito de praticar Acadêmia, ouvir música, ver filmes e
            aproveitar o tempo com amigos e família.
          </p>
          <div
            class="my-4 flex flex-wrap justify-center md:justify-start gap-2"
          >
            <a
              class="flex items-center rounded-full bg-cyan-500 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.linkedin.com/in/eullerlourenco/"
            >
              <i class="fa-brands fa-linkedin-in py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-pink-600 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.instagram.com/eullerls_/"
            >
              <i class="fa-brands fa-instagram py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-gray-800 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://github.com/eullerlourenco"
            >
              <i class="fa-brands fa-github py-3 px-3.25"></i>
            </a>
          </div>
        </div>
        <div
          class="py-2 flex justify-center md:justify-start z-10 items-center"
        >
          <img
            class="h-64 w-64 md:ms-[-20px] group-hover:md:ms-0 object-cover rounded-4xl object-cover border-5 border-cyan-500 duration-300 ease-in-out"
            src='{{ asset('assets/images/eullerls.jpeg') }}'
            alt="eullerls"
          />
        </div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-2 divide-x-8 divide-gray-300">
        <div class="py-16"></div>
        <div></div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 group">
        <div class="py-2 flex justify-center md:justify-end z-10 items-center">
          <img
            class="h-64 w-64 md:me-[-20px] group-hover:md:me-0 object-cover rounded-4xl object-cover border-5 border-lime-500 duration-300 ease-in-out"
            src='{{ asset ('assets/images/lucasbardeli.jpg') }}'
            alt="lucasbardeli"
          />
        </div>
        <div
          class="px-2 py-4 col-span-3 lg:p-10 text-center border border-gray-300 shadow-lg rounded-3xl"
        >
          <h2 class="text-4xl text-start text-gray-600 rounded-xl">
            Lucas Bardeli
          </h2>
          <div
            class="bg-gradient-to-r from-lime-500 to-cyan-500 py-0.5 my-3.5 w-full"
          ></div>
          <p class="text-xl text-gray-600 indent-8 text-start">
            Tenho 19 anos. Atualmente estou cursando Desenvolvimento de Software
            Multiplataforma na Fatec de Jahu e trabalhando como Estagiário de
            T.I na Integrale Gestão Empresarial. Meu esporte favorito é vôlei,
            consequentemente sendo meu hobby favorito, além de assistir séries e
            filmes.
          </p>
          <div
            class="my-4 flex flex-wrap justify-center md:justify-start gap-2"
          >
            <a
              class="flex items-center rounded-full bg-cyan-500 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.linkedin.com/in/lucas-bardeli/"
            >
              <i class="fa-brands fa-linkedin-in py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-pink-600 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.instagram.com/lucas.bardeli/"
            >
              <i class="fa-brands fa-instagram py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-gray-800 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://github.com/lucas-bardeli"
            >
              <i class="fa-brands fa-github py-3 px-3.25"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-2 divide-x-8 divide-gray-300">
        <div class="py-16"></div>
        <div></div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 group">
        <div
          class="px-2 py-4 order-last md:order-first col-span-3 lg:p-10 text-center border border-gray-300 shadow-lg rounded-3xl"
        >
          <h2 class="text-4xl text-start text-gray-600 rounded-xl">
            João Francisco
          </h2>
          <div
            class="bg-gradient-to-r from-amber-400 to-orange-500 py-0.5 my-3.5 w-full"
          ></div>
          <p class="text-xl text-gray-600 indent-8 text-start">
            Tenho 18 anos, sou estudante de DSM na Fatec Jahu e também atuo como
            gestor de tráfego pago, ajudando negócios a crescer por meio da
            mídia digital. Tenho interesse por tecnologia, marketing e inovação,
            e gosto de aprender sempre na prática. Fora da área técnica, gosto
            muito de jogar vôlei, ir para a academia, ver séries e passar tempo
            com a família e os amigos.
          </p>
          <div
            class="my-4 flex flex-wrap justify-center md:justify-start gap-2"
          >
            <a
              class="flex items-center rounded-full bg-cyan-500 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.linkedin.com/in/joão-francisco-fabbri-fonseca/"
            >
              <i class="fa-brands fa-linkedin-in py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-pink-600 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.instagram.com/jf.fonsecaa_/"
            >
              <i class="fa-brands fa-instagram py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-gray-800 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://github.com/JoaoFonseca4"
            >
              <i class="fa-brands fa-github py-3 px-3.25"></i>
            </a>
          </div>
        </div>
        <div
          class="py-2 flex justify-center md:justify-start z-10 items-center"
        >
          <img
            class="h-64 w-64 md:ms-[-20px] group-hover:md:ms-0 object-cover rounded-4xl object-cover border-5 border-orange-500 duration-300 ease-in-out"
            src='{{ asset ('assets/images/joaofran.jpg') }}'
            alt="João Francisco"
          />
        </div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-2 divide-x-8 divide-gray-300">
        <div class="py-16"></div>
        <div></div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 group">
        <div class="py-2 flex justify-center md:justify-end z-10 items-center">
          <img
            class="h-64 w-64 md:me-[-20px] group-hover:md:me-0 object-cover rounded-4xl object-cover border-5 border-amber-400 duration-300 ease-in-out"
            src='{{ asset ('assets/images/gabribeiro.jpg') }}'
            alt="gabribeiro"
          />
        </div>
        <div
          class="px-2 py-4 col-span-3 lg:p-10 text-center border border-gray-300 shadow-lg rounded-3xl"
        >
          <h2 class="text-4xl text-start text-gray-600 rounded-xl">
            Gabriel Ribeiro
          </h2>
          <div
            class="bg-gradient-to-r from-amber-400 to-orange-500 py-0.5 my-3.5 w-full"
          ></div>
          <p class="text-xl text-gray-600 indent-8 text-start">
            Tenho 18 anos, sou estudante de Desenvolvimento de Software
            Multiplataforma na Fatec Jahu, sendo meu principal hobby a academia,
            onde busco sempre melhorar minha saúde e condicionamento físico.
          </p>
          <div
            class="my-4 flex flex-wrap justify-center md:justify-start gap-2"
          >
            <a
              class="flex items-center rounded-full bg-cyan-500 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.linkedin.com/in/gabriel-alexandre-ribeiro-97950026a/"
            >
              <i class="fa-brands fa-linkedin-in py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-pink-600 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.instagram.com/gabrielalexas/"
            >
              <i class="fa-brands fa-instagram py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-gray-800 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://github.com/Gabriel-Ribeiro2"
            >
              <i class="fa-brands fa-github py-3 px-3.25"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-2 divide-x-8 divide-gray-300">
        <div class="py-16"></div>
        <div></div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 group">
        <div
          class="px-2 py-4 order-last md:order-first col-span-3 lg:p-10 text-center border border-gray-300 shadow-lg rounded-3xl"
        >
          <h2 class="text-4xl text-start text-gray-600 rounded-xl">
            Beatriz Monteiro
          </h2>
          <div
            class="bg-gradient-to-r from-orange-500 to-red-500 py-0.5 my-3.5 w-full"
          ></div>
          <p class="text-xl text-gray-600 indent-8 text-start">
            Tenho 18 anos, estudante de Desenvolvimento de Software
            Multiplataforma (DSM). No meu tempo livre, adoro ouvir música e
            tocar ukulele. Também gosto de filmes de terror, ação e estou sempre
            buscando aprender mais, tanto na área de tecnologia quanto no mundo
            ao meu redor.
          </p>
          <div
            class="my-4 flex flex-wrap justify-center md:justify-start gap-2"
          >
            <a
              class="flex items-center rounded-full bg-cyan-500 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.linkedin.com/in/beatriz-monteiro-808b86352"
            >
              <i class="fa-brands fa-linkedin-in py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-pink-600 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://www.instagram.com/beatrizkmonteiro_/"
            >
              <i class="fa-brands fa-instagram py-3 px-3.25"></i>
            </a>
            <a
              class="flex items-center rounded-full bg-gray-800 text-xl text-white hover:scale-[1.02] duration-300 ease-in-out"
              target="_blank"
              href="https://github.com/beatrizmonteiro014"
            >
              <i class="fa-brands fa-github py-3 px-3.25"></i>
            </a>
          </div>
        </div>
        <div
          class="py-2 flex justify-center md:justify-start z-10 items-center"
        >
          <img
            class="h-64 w-64 md:ms-[-20px] group-hover:md:ms-0 object-cover rounded-4xl object-cover border-5 border-red-500 duration-300 ease-in-out"
            src='{{ asset('assets/images/beaamonteiro.jpg') }}'
            alt="beaamonteiro"
          />
        </div>
      </div>
    </section>

    <section class="container px-4 mx-auto">
      <div class="grid grid-cols-2 divide-x-8 divide-gray-300">
        <div class="py-16"></div>
        <div></div>
      </div>
    </section>
@endsection
