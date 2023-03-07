@extends('layouts.plantilla')
@vite('resources/css/home.scss')

@section('title','Registrate')
    
@section('content')
<section class="fondo">
    <div id="capa">
        <h1 class="text-2xl text-white">Crear Cuenta</h1>
        <form action="{{route('singup.store')}}" method="post">
            @csrf
            <div class="space-y-4">
                <label class="flex flex-col">
                    <span class="font-serif text-slate-600 dark:text-slate-400">Nombre</span>
                    <input type="text" class="rounded-md shadow-sm border-slate-300 dark_bg-slate-900/80" autofocus="autofocus" name="name" value="{{old('name')}}">
                    @error('name')
                        <small class="font-blod text-red-500/80">Introduce los datos</small>
                    @enderror



                </label>
                <label class="flex flex-col">
                    <span class="font-serif text-slate-600 dark:text-slate-400">Correo</span>
                    <input type="email" class="rounded-md shadow-sm border-slate-300 dark_bg-slate-900/80" name="email" required value="{{old('email')}}">
                    @error('email')
                    <small class="font-blod text-white font-bold">Ya esta en la base de datos</small>
                    @enderror



                </label>
                <label class="flex flex-col">
                    <span class="font-serif text-slate-600 dark:text-slate-400">Password</span>
                    <input type="password" class="rounded-md shadow-sm border-slate-300 dark_bg-slate-900/80" name="password" value="{{old('password')}}">
                    @error('password')
                    <small class="font-blod text-white font-bold">Introduce los datos</small>
                    @enderror



                </label>
                <label class="flex flex-col">
                    <span class="font-serif text-slate-600 dark:text-slate-400">Password Confirmacion</span>
                    <input type="password" class="rounded-md shadow-sm border-slate-300 dark_bg-slate-900/80" name="password_confirmation" value="{{old('password_confirmation')}}">
                    @error('password_confirmation')
                    <small class="font-blod text-white font-bold">Introduce los datos</small>
                    @enderror



                </label>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrate</button>
            </div>


            {{-- <div class="mb-6">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="correo electronico" required>
            </div>
            <div class="mb-6">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required placeholder="contraseña">
            </div>
            <div class="mb-6">
              <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repita el password</label>
              <input type="password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required placeholder="repita la contraseña">
            </div>
            <div class="flex items-start mb-6">
              <div class="flex items-center h-5">
                <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
              </div>
              <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Acepto los <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terminos y condiciones</a></label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrate</button> --}}
          </form>
    </div>

</section>@endsection