@extends('layouts.plantilla')
@vite('resources/css/home.scss')
@section('title', 'Home')

@section('content')

    <section class="hero flex justify-end">
        <div class="info flex items-center justify-center flex-col mr-16">
            <h2 class="text-white font-princi font-bold pb-2 text-2xl">¿Quieres descubrir el universo?</h2>
            <a href="{{ route('singup') }}" type="button"
                class=" {{ request()->routeIs('singup') }} mt-4 cursor-pointer inline-block focus:outline-none text-white bg-indigo-400 hover:bg-terc-800 focus:ring-4 focus:ring-terc-300 font-segun rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-400 dark:hover:bg-gray-700 dark:focus:ring-terc-900">Registrate</a>
        </div>
    </section>
    <section class="main m-14 pb-24 md:pb-12">



        <div id="controls-carousel" class="relative centrar" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-64 overflow-hidden rounded-lg md:h-96 slide-tam">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images/foto1-slide.jpg"
                        class="absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="foto1">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="images/foto2-slide.jpg"
                        class="absolute block h-auto max-w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="foto2">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images/foto3-slide.jpg"
                        class="absolute block h-auto max-w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="foto3">
                </div>

            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-white group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="sr-only">Anterior</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-white group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Siguiente</span>
                </span>
            </button>
        </div>


    </section>
    <section class="m-14 pb-24 md:pb-12">
        <h1 class="mb-10 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">Recursos del día</h1>
            <div class="grid grid-cols-3 justify-items-center gap-4">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/cielo.jpg" alt="" />
                    </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sendas estelares. Tenerife 2023</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Compilacion de cientos de fotos tomadas en el observatorio de Tenerife, se puede ver la rotacion de las estrellas.</p>
                    <a href="https://es.wikipedia.org/wiki/Senda_estelar" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Leer mas
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-64" src="images/asteroide.jpg" alt="" />
                    </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nuevo asteroide con riesgo de impacto contra la Tierra, en 2046</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Un asteroide de unos 50 metros de diámetro, descubierto el 26 de febrero, sigue una trayectoria que entraña un pequeño riesgo de impacto contra la Tierra el 14 de febrero de 2046.</p>
                    <a href="https://www.europapress.es/ciencia/astronomia/noticia-nuevo-asteroide-riesgo-impacto-contra-tierra-2046-20230309125647.html" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Leer mas
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-50" src="images/cumulo.jpeg" alt="" />
                    </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nuevo cumulu descubierto</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Gracias al reputado astronomo Javier Velez, se han descubierto un nuevo cumulo de galaxias a 400millones de años luz de la Tierra.</p>
                    <a href="https://www.youtube.com/watch?v=U-n4hWNewiE&ab_channel=MusicFull5" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Leer mas
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/quedada.jpg" alt="" />
                    </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nueva quedada de amigos de la astronomia en Sevilla</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">A todas las personas se le invita a una nueva quedada donde debatiremos si Pluton es un planeta y mucho más!</p>
                    <a href="https://www.youtube.com/watch?v=YdqgUiFYVYo&ab_channel=roubeenTV" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Leer mas
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/auroras.webp" alt="" />
                    </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Auroras boreales captadas en Los Palacios</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Dado al cambio climático que esta sufriendo el plantea Tierra el invierno es cada vez más frio en nuestro país, como podemos ver al hallarse este magnifico evento natural en un pueblo sevillano</p>
                    <a href="https://www.youtube.com/watch?v=p8Z4ktIIY6g&ab_channel=squewe" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Leer mas
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="images/matrimonio.webp" alt="" />
                    </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Primeras personas en casarse en Marte</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jhon McKennedy(Mashashushets) y Erika Goblenawer(Ohio) son la primera pareja de la historia en casarse fuera de nuestro planeta, !enhorabuena¡</p>
                    <a href="https://www.youtube.com/watch?v=iV92Z6vcDwE&ab_channel=Blijf" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Leer mas
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                </div>
            </div>
            

    </section>
    {{-- <section class="m-14 pb-24 md:pb-12">
       
        <div class="flex justify-center">
            <figure class="max-w-lg">
                <img class="h-auto max-w-full rounded-lg" src="images/cielo.jpg" alt="image description">
                <figcaption class="mt-2 text-sm text-center text-indigo-900 dark:text-white">Sendas de luz desde el instituto de Astrofísica de Canarias</figcaption>
            </figure>
        </div>
        <p class="m-4 text-lg font-normal text-indigo-900 dark:text-white text-center">Sendas estelares y de luces nocturnas captadas desde el instituto de Astrofísica de Canarias, España.</p>
        <p class="text-lg font-normal text-indigo-900 dark:text-white text-center">La imágen fue generada a partir del apilamiento de imágenes tomadas por el ingeniero Alberto Mulero con una exposición de 30 segundos.</p>
        <p class="text-lg font-normal text-indigo-900 dark:text-white text-center">En la imágen se puede ver el recorrido circular de las estrellas debido al giro sobre si misma de la Tierra.</p>
        <a href="#" class="inline-flex items-center text-lg text-indigo-900 dark:text-white hover:underline">
            Leer más
            <svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </a>
    </section> --}}
    <section>
        <div id="informational-banner" tabindex="-1" class="fixed bottom-0 left-0 z-50 flex flex-col justify-around w-full p-4 border-b border-gray-200 md:flex-row bg-gray-50 dark:bg-gray-700 dark:border-gray-600 opacity-90">
            <div class="mb-4 md:mb-0 md:mr-4">
                <h2 class="mb-1 text-base font-semibold text-gray-900 dark:text-white">El conocimiento es poder</h2>
                <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">Tú también puedes colaborar con nosotros ampliando contenido. !A que esperas¡</p>
            </div>
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('singup') }}" class="inline-flex items-center px-3 py-2 mr-3 text-xs font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><svg class="w-4 h-4 mr-1.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path></svg> Aprende más</a>
                <a href="{{ route('singup') }}" class="inline-flex px-3 py-2 mr-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Empieza <svg class="h-4 w-4 ml-1.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path clip-rule="evenodd" fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"></path></svg></a>
                <button data-dismiss-target="#informational-banner" type="button" class="absolute top-2.5 right-2.5 md:relative md:top-auto md:right-auto flex-shrink-0 inline-flex justify-center items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close banner</span>
                </button>
            </div>
        </div>
    </section>

@endsection
