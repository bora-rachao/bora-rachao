<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nome da Página - BoraRachão</title>
  <link rel="shortcut icon" href="/resources/assets/images/logos/logo-white-colors.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    class="css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="/resources/assets/css/style.css" />
</head>
<body class="bg-gray-50">
  <script src="/resources/assets/js/script.js"></script>
</body>
</html>
  <!-- logged header -->
  <header class="shadow bg-white py-3">
    <div
      class="container mx-auto px-2 flex flex-row flex-wrap items-center justify-between"
    >
      <!-- nav mobile -->
      <nav class="md:hidden">
        <a id="btn_open_menu_mobile" class="hover:cursor-pointer">
          <i
            class="fa-solid fa-bars text-lg text-gray-500 py-3 px-3.5 rounded-xl hover:bg-gray-100 duration-300 ease-in-out"
          ></i>
        </a>
        <div
          id="menu_mobile"
          class="fixed p-6 w-screen h-screen bg-white z-50 top-0 left-0 hidden"
        >
          <div class="text-end">
            <a id="btn_close_menu_mobile" class="hover:cursor-pointer">
              <i
                class="fa-solid fa-xmark text-lg text-gray-500 py-3 px-3.5 rounded-xl bg-gray-100 hover:bg-gray-200 duration-300 ease-in-out"
              ></i>
            </a>
          </div>
          <div class="text-gray-700 flex flex-col gap-y-3">
            <h3 class="text-2xl">Menu</h3>
            <hr class="text-gray-300" />
            <a
              href="/app/Views/index.html"
              class="text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out"
            >
              <i
                class="fa-solid fa-house text-sm bg-orange-200 p-2 rounded-xl text-orange-500"
              ></i>
              Home
            </a>
            <a
              href="/app/Views/general/contact.html"
              class="text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out"
            >
              <i
                class="fa-solid fa-message text-sm bg-orange-200 p-2 rounded-xl text-orange-500"
              ></i>
              Contato
            </a>
            <a
              href="/app/Views/match/matches.html"
              class="text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out"
            >
              <i
                class="fa-solid fa-futbol text-sm bg-orange-200 p-2 rounded-xl text-orange-500"
              ></i>
              Partidas
            </a>
            <a
              href="/app/Views/sports/sports.html"
              class="text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out"
            >
              <i
                class="fa-solid fa-volleyball text-sm bg-orange-200 p-2 rounded-xl text-orange-500"
              ></i>
              Esportes
            </a>
            <a
              href="/app/Views/general/about.html"
              class="text-xl hover:bg-gray-100 p-3 rounded-2xl flex items-center gap-x-1.5 duration-300 ease-in-out"
            >
              <i
                class="fa-solid fa-people-group text-sm bg-orange-200 p-2 rounded-xl text-orange-500"
              ></i>
              Sobre
            </a>
            <a
              href="/app/Views/match/matches.html"
              class="mt-3 text-lg bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-2.5 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5"
            >
              Bora Jogar!
            </a>
            <a
              href="/app/Views/auth/login.html"
              class="mt-2 bg-lime-500 hover:bg-lime-400 hover:shadow-md hover:shadow-lime-400/50 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center justify-center duration-300 ease-in-out gap-x-1.5"
            >
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Sair
            </a>
          </div>
        </div>
      </nav>
      <div>
        <a href="/app/Views/index.html">
          <img
            src="/resources/assets/images/logos/logo-bora-rachao-black.png"
            alt="logo"
            class="max-w-[175px] object-cover"
          />
        </a>
      </div>
      <nav class="hidden md:flex space-x-6">
        <a
          href="/app/Views/index.html"
          class="text-gray-800 hover:text-cyan-500 duration-300 ease-in-out"
          >Home</a
        >
        <a
          href="/app/Views/general/contact.html"
          class="text-gray-800 hover:text-cyan-500 duration-300 ease-in-out"
          >Contato</a
        >
        <a
          href="/app/Views/match/matches.html"
          class="text-gray-800 hover:text-cyan-500 duration-300 ease-in-out"
          >Partidas</a
        >
        <a
          href="/app/Views/sports/sports.html"
          class="text-gray-800 hover:text-cyan-500 duration-300 ease-in-out"
          >Esportes</a
        >
        <a
          href="/app/Views/general/about.html"
          class="text-gray-800 hover:text-cyan-500 duration-300 ease-in-out"
          >Sobre</a
        >
      </nav>
      <div class="flex items-center space-x-3">
        <a href="/app/Views/user/profile.html">
          <img
            src="/resources/assets/images/beaamonteiro.jpg"
            class="w-9 h-9 rounded-full border-2 border-gray-300 hover:border-cyan-500 duration-300 ease-in-out"
            alt="Profile Photo"
          />
        </a>
        <div class="hidden md:block">
          <a
            href="/app/Views/match/matches.html"
            class="bg-cyan-500 hover:bg-cyan-400 hover:shadow-md hover:shadow-cyan-400/35 hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center duration-300 ease-in-out gap-x-1.5"
          >
            Bora jogar!
          </a>
        </div>
      </div>
    </div>
  </header>