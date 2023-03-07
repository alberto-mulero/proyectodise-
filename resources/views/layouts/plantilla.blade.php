<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/funciones.js')
    @vite('resources/js/app.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    {{-- favicon --}}
    <title>@yield('title')</title>
</head>

<body class="dark:bg-gray-400 flex flex-col justify-between">
    {{-- nav --}}
    @guest
        <nav class="bg-terc-700 border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-600">


            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="{{ route('index') }}" class="flex items-center">
                    <img src="images/logo.png" class="h-16 mr-3 sm:h-16" alt="Logo" />
                    <span
                        class="self-center sm:hidden text-2xl sm:text-4xl font-princi whitespace-nowrap text-gray-900 dark:text-white">WIKIUNIVERSE</span>
                </a>
                <button id="theme-toggle" type="button"
                    class="dark:text-gray-400 dark:hover:text-white hover:text-terc-100 text-sm">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <button id="btn" data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm rounded-lg md:hidden hover:text-terc-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Abrir menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="menu-nav">
                    <ul
                        class="flex flex-col p-4 mt-4  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-segun md:border-0">

                        <li>
                            <a href="{{ route('login') }}"
                                class="block py-2 pl-3 pr-4  hover:bg-terc-400 md:hover:bg-transparent md:border-0 dark:text-white dark:hover:font-bold md:hover:text-white md:hover:font-bold md:p-0  md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent text-white">Iniciar
                                Sesión</a>
                        </li>
                        <li>
                            <a href="{{ route('singup') }}"
                                class="block py-2 pl-3 pr-4  hover:bg-terc-400 md:hover:bg-transparent md:border-0 dark:text-white dark:hover:font-bold md:hover:text-white md:hover:font-bold md:p-0  md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent text-white">Registro</a>
                        </li>


                        <li>
                            <a href="{{ route('somos') }}"
                                class="block py-2 pl-3 pr-4  hover:bg-terc-400 md:hover:bg-transparent md:border-0 md:hover:text-white md:hover:font-bold md:p-0 dark:text-white dark:hover:font-bold md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent text-white">¿Quienes
                                somos?</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

    @endguest

    @auth
        <nav class="bg-terc-700 border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-600">


            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="{{ route('sesion') }}" class="flex items-center">
                    <img src="../../images/logo.png" class="h-16 mr-3 sm:h-16" alt="Logo" />
                    <span
                        class="self-center sm:hidden text-2xl sm:text-4xl font-terc whitespace-nowrap text-gray-700 dark:text-white">WIKIUNIVERSE</span>
                </a>
                <button id="theme-toggle" type="button"
                    class="dark:text-gray-400 dark:hover:text-white hover:text-terc-100 text-sm">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <button id="btn" data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm rounded-lg md:hidden hover:text-terc-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Abrir menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="menu-nav">
                    <ul
                        class="flex flex-col p-4 mt-4  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-segun md:border-0">


                        <p
                            class="block py-2 pl-3 pr-4  hover:bg-terc-400 md:hover:bg-transparent md:border-0 dark:text-white dark:hover:font-bold md:hover:text-white md:hover:font-bold md:p-0  md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent text-white">
                            {{ Auth::user()->name }}</p>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button
                                class="block py-2 pl-3 pr-4  hover:bg-terc-400 md:hover:bg-transparent md:border-0 dark:text-white dark:hover:font-bold md:hover:text-white md:hover:font-bold md:p-0  md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent text-white">Cerrar
                                Sesión</button>
                        </form>

                        <li>
                            <a href="{{ route('somos') }}"
                                class="block py-2 pl-3 pr-4  hover:bg-terc-400 md:hover:bg-transparent md:border-0 md:hover:text-white md:hover:font-bold md:p-0 dark:text-white dark:hover:font-bold md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent text-white">¿Quienes
                                somos?</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    @endauth



    @yield('content')

    {{-- footer --}}


    @guest

    <footer
        class="p-4 bg-terc-700 text-center shadow md:flex md:items-center md:justify-around md:p-6 dark:bg-gray-600">
        <div>
            <span class="text-sm sm:text-center text-white">©WIKIUNIVERSE™. Todos los derechos Reservados.</span>
            <p class="text-sm sm:text-center text-white"><a href="">¿Quienes Somos?</a></p>

        </div>
        <br>
        <div class="flex justify-center mt-3 gap-3 text-sm text-gray-500 dark:text-white-400 sm:mt-0">
            <a href="https://www.instagram.com/amulero23/"><img src="images/instagram.png" alt="instagram"></a>
            <a href="https://www.tiktok.com/@albertomulero7"><img src="images/tiktok.png" alt="tiktok"></a>
            <a href="https://twitter.com/amulero23"><img src="images/twitter.png" alt="twitter"></a>
    </footer>
    @endguest
    @auth
    <footer
        class="p-4 bg-terc-700 text-center shadow md:flex md:items-center md:justify-around md:p-6 dark:bg-gray-600">
        <div>
            <span class="text-sm sm:text-center text-white">©WIKIUNIVERSE™. Todos los derechos Reservados.</span>
            <p class="text-sm sm:text-center text-white"><a href="">¿Quienes Somos?</a></p>

        </div>
        <br>
        <div class="flex justify-center mt-3 gap-3 text-sm text-gray-500 dark:text-white-400 sm:mt-0">
            <a href="https://www.instagram.com/amulero23/"><img src="../../images/instagram.png" alt="instagram"></a>
            <a href="https://www.tiktok.com/@albertomulero7"><img src="../../images/tiktok.png" alt="tiktok"></a>
            <a href="https://twitter.com/amulero23"><img src="../../images/twitter.png" alt="twitter"></a>
    </footer>
    @endauth

    {{-- scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>
