@extends('layouts.plantilla')
@vite('resources/css/home.scss')
@section('title', 'Home')

@section('content')

    <h1 class="text-5xl font-extrabold dark:text-white text-center m-10">Bienvenido {{ Auth::user()->name }}</h1>

    <div class="gridd">
        <table class="gridd__tabla text-gray-500 dark:text-gray-400">
            <thead class="tabla__head text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Imagen
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($universos as $universo)
                    <tr class=" dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if (auth()->user()->is_admin == 1)
                                <a href="{{ route('sesionadmin', $universo->id) }}">{{ $universo->nombre }}</a>
                            @else
                                <a href="{{ route('sesionuser', $universo->id) }}">{{ $universo->nombre }}</a>
                            @endif
                        </th>
                        <td class="imagen px-6 py-4">
                            @if (auth()->user()->is_admin == 1)
                                <a href="{{ route('sesionadmin', $universo->id) }}"><img
                                        src="images/featureds/{{ $universo->imagen }}"
                                        alt="{{ $universo->nombre }}"></a>
                            @else
                                <a href="{{ route('sesionuser', $universo->id) }}"><img
                                        src="images/featureds/{{ $universo->imagen }}" alt=""></a>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if (auth()->user()->is_admin == 1)
                                <a class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-indigo-800""
                                    href="{{ route('sesionadmin', $universo->id) }}">Más Informacion</a>
                            @else
                                <a class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-indigo-800""
                                    href="{{ route('sesionuser', $universo->id) }}">Más Informacion</a>
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="flex justify-center m-10">
        <a class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-900 dark:hover:bg-gray-500 focus:outline-none dark:focus:ring-gray-900 "
            href="{{ route('añadir') }}">Añadir</a>
    </div>

    <br>


    <br>
    {{ $universos->links() }}
@endsection
