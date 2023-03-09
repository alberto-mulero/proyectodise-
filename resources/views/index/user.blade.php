@extends('layouts.plantilla')
@vite('resources/css/home.scss')
@section('title','Home')

@section('content')

<div class="grid place-items-center min-h-screen">
    <div class="p-4 max-w-5xl grid grid-cols-2 gap-4 xs:grid xs:grid:gap-4 xs:grid-cols-2">
         <figure class="imagen">
             <img class="w-full clip-path-mypolygon" src="../../images/featureds/{{($universo->imagen)}}" alt="{{$universo->nombre}}">
         </figure>
         
         <p class="text-white dark:text-gray-900">{{$universo->descripcion}}</p>
         
         <p class="text-center text-white dark:text-gray-900">Su temperatura media es de: {{$universo->temp_media}} ºC</p>
         <h1 class="text-5xl font-extrabold xs:col-span-2 xs:w-1/2 text-indigo-900 text-center dark:text-gray-900">{{$universo->nombre}}</h1>
     </div>
     
 </div>
<div class="flex justify-center mt-10">
   <a class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-900 dark:hover:bg-gray-500 focus:outline-none dark:focus:ring-gray-900 " href="{{ route('sesion') }}">Volver</a> 
</div>




@endsection