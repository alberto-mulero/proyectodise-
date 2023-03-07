@extends('layouts.plantilla')
@vite('resources/css/home.scss')
@section('title', 'Quienes Somos')

@section('content')

    <h1 class="text-3xl font-extrabold dark:text-white text-center mt-10 md:text-5xl">Quienes somos</h1>
    <div class="container">
        <div class="m-10 video p-3">
            <video class="h-full border-none border-gray-200 rounded-lg dark:border-gray-700 text-center md:border" autoplay
                muted loop controls>
                <source src="images/video1.mp4" type="video/mp4">
                Tu navegador no soporta videos.
            </video>
            <p class="mb-3 font-light text-black dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Doloribus cupiditate, quaerat debitis labore est consectetur rerum neque? Exercitationem, quam officiis
                pariatur fugiat magni qui a corporis at, porro dolores fuga. <br> Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. Ipsa, corrupti! Blanditiis modi expedita, possimus nulla aliquam atque similique error
                quas beatae perspiciatis dignissimos quod eaque quibusdam nisi cupiditate vero ad!</p>

        </div>

    </div>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    <div class="img">
        <div class="img__imagen">
            <div class="img__imagen--img">
                <img class="w-44 h-44 md:w-48 md:h-48" src="images/user1.jpg" alt="user1">
            </div>
            <h3 class="text-center text-xl text-black dark:text-white">Armut Dalal</h3>
            <p class="text-center">Creador de la pagina</p>

        </div>
        <div class="img__imagen">
            <div class="img__imagen--img">
                <img class="w-44 h-44 md:w-48 md:h-48" src="images/user2.jpg" alt="user1">
            </div>
            <h3 class="text-center text-xl text-black dark:text-white">Armut Dalal</h3>
            <p class="text-center">Creador de la pagina</p>
        </div>
    </div>




@endsection
