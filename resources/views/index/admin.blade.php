@extends('../layouts/plantilla')
@vite('../resources/css/home.scss')
@section('title','Home')

@section('content')

<h1 class="text-5xl font-extrabold dark:text-white text-center m-10">{{$universo->nombre}}</h1>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-indigo-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
               
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Temperatura media
                </th>
                <th scope="col" class="px-6 py-3">
                    Diametro
                </th>
                <th scope="col" class="px-6 py-3">
                    Imagen
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-indigo-500 text-white border-b dark:bg-gray-800 dark:border-gray-700">
                
                <td class="px-6 py-4">
                    {{$universo->descripcion}}
                </td>
                <td class="px-6 py-4">
                    {{$universo->temp_media}} ºC
                </td>
                <td class="px-6 py-4">
                    {{$universo->diametro}} km
                </td>
                <td class="imagen px-6 py-4">
                    <img src="../../images/featureds/{{($universo->imagen)}}" alt="{{$universo->nombre}}">
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="{{ route('edit',$universo) }}" class="font-medium text-white dark:text-indigo-500 hover:underline">Editar</a>
                </td>
                <td class="px-6 py-4 text-center">
                    <form action="{{ route('destroy',$universo) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="font-semibold hover:underline mt-4" type="submit">Eliminar</button>
                    </form>
                    
                </td>
                
            </tr>
            
        </tbody>
    </table>
</div>

<div class="flex justify-center mt-10">
    <a class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-900 dark:hover:bg-gray-500 focus:outline-none dark:focus:ring-gray-900 " href="{{ route('sesion') }}">Volver</a> 
 </div>
@endsection