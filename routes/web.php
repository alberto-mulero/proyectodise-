<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\SingupController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\IndexAuthController;
use App\Http\Controllers\SomosController;
use App\Mail\VerificacionMail;

// $is_admin = User::where('is_admin','1')->get();
// $admin = $is_admin[0]->is_admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', IndexController::class)->name('index');

Route::get('login', [LoginController::class, 'login'])->name('login');

Route::view('singup', 'auth.singup')->name('singup');

Route::view('login','auth.login')->name('login');

Route::post('login',[AuthenticatedSessionController::class,'store']);

Route::post('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::post('singup', [SingupController::class, 'store'])->name('singup.store');

Route::get('somos',[SomosController::class,'somos'])->name('somos');

Route::get('index',[IndexAuthController::class,'index'])->name('sesion')->middleware('auth');

Route::get('index/añadir',[IndexAuthController::class,'añadir'])->name('añadir')->middleware('auth');

Route::post('index',[IndexAuthController::class,'store'])->name('universo')->middleware('auth');

Route::get('index/user/{id}',[IndexAuthController::class,'user'])->name('sesionuser')->middleware('auth');

Route::get('index/admin/{id}',[IndexAuthController::class,'admin'])->name('sesionadmin')->middleware('auth');

Route::get('enviar-mail/{email}', [VerificacionMail::class, 'usuario'])->name('enviar-mail');

Route::get('index/{id}/edit',[IndexAuthController::class,'edit'])->name('edit')->middleware('auth');

Route::put('index/{id}',[IndexAuthController::class,'update'])->name('update')->middleware('auth');

Route::delete('index/{id}',[IndexAuthController::class,'destroy'])->name('destroy')->middleware('auth');
