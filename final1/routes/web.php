<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
	Route::view('cursoscaps', 'livewire.cursoscaps.index')->middleware('auth');
	Route::view('servicios', 'livewire.servicios.index')->middleware('auth');
	Route::view('empleos', 'livewire.empleos.index')->middleware('auth');
	Route::view('eventos', 'livewire.eventos.index')->middleware('auth');
	Route::view('clientes', 'livewire.clientes.index')->middleware('auth');
	Route::view('generos', 'livewire.generos.index')->middleware('auth');