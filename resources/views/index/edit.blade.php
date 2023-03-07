@extends('layouts.plantilla')
@vite('resources/css/home.scss')
@section('title','Home')

@section('content')
<section class="centrar-form">
<h1 class="text-5xl font-extrabold dark:text-white text-center m-10">Editar</h1>
<form action="{{ route('update',$universo) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class=" md:grid-cols-2">
        <div>
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
            <input value="{{$universo->nombre}}" type="text" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" required>
        </div>
        <br>
        <div>
            <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
            <input value="{{$universo->descripcion}}" type="text" name="descripcion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" required>
        </div>
        <br>
        <div>
            <label for="temp_media" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperatura Media</label>
            <input value="{{$universo->temp_media}}" type="text" name="temp_media" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" required>
        </div>  
        <br>
        <div>
            <label for="diametro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diametro</label>
            <input value="{{$universo->diametro}}" type="tel" name="diametro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" required>
        </div>
        <br>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imagen">Subir imagen</label>
            <input value="{{$universo->imagen}}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="imagen" type="file">
        </div>
        


    </div>
    <button type="submit" class="mt-5 text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Enviar</button>
</form>
<div class="mt-8 pb-20 md:pb-10">
    <a class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-900 dark:hover:bg-gray-500 focus:outline-none dark:focus:ring-gray-900 " href="{{ route('sesion') }}">Volver</a> 
 </div>
</section>

@endsection