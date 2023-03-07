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
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 slide-tam">
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

@endsection
