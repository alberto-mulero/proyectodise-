@extends('layouts.plantilla')
@vite('resources/css/home.scss')
@section('title','Inicia Sesion')
    
@section('content')
<section class="fondo">
    <div id="capa">
        <h1 class="font-princi text-2xl text-white">Iniciar Sesion</h1>
        <form action="{{route('login')}}" method="post"> 
            

            @csrf
            <div class="space-y-4">
                
                <label class="flex flex-col">
                    <span class="font-terc text-slate-600 dark:text-slate-400">Correo</span>
                    <input type="email" class="rounded-md shadow-sm border-slate-300 dark_bg-slate-900/80" name="email" required>
                    @error('email')
                    <small class="font-terc text-white font-bold">El correo que has introducido no se encuentra en la base</small>
                    @enderror



                </label>
                <label class="flex flex-col">
                    <span class="font-terc text-slate-600 dark:text-slate-400">Password</span>
                    <input type="password" class="rounded-md shadow-sm border-slate-300 dark_bg-slate-900/80" required name="password">
                    @error('password')
                    <small class="font-terc  text-white font-bold">La contraseña no es correcta</small>
                    @enderror
                </label>
                <label class="flex items-center">
                    <input type="checkbox" class="rounded-md shadow-sm border-slate-300 dark_bg-slate-900/80" name="remember">
                    <span class="ml-2 cursor-pointer font-terc text-slate-600 dark:text-slate-400">Recuerdame</span>
                    
                    
                </label>
                <button type="submit" class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-terc rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Iniciar Sesion</button>
            </div>


          
          </form>
    </div>

</section>@endsection