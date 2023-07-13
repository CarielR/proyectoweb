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
	Route::get('/generar-pdfservicio', function () {
		$pdf = PDF::loadView('livewire.servicio-pdf');
		return $pdf->stream('servicio.pdf');
	})->name('generar-pdfservicio');
	Route::get('/generar-pdfcursos', function () {
		$pdf = PDF::loadView('livewire.cursos-cap');
		return $pdf->stream('cursos.pdf');
	})->name('generar-pdfcursos');
	Route::get('/generar-pdfgeneros', function () {
		$pdf = PDF::loadView('livewire.generos-pdf');
		return $pdf->stream('generos.pdf');
	})->name('generar-pdfgeneros');
	Route::view('/generar-servicio', 'livewire.servicio-pdf')->middleware('auth');
	Route::view('eventos', 'livewire.eventos.index')->middleware('auth');
	Route::view('clientes', 'livewire.clientes.index')->middleware('auth');
	Route::view('generos', 'livewire.generos.index')->middleware('auth');
	Route::get('/generar-pdf', function () {
		$pdf = PDF::loadView('livewire.cand');
		return $pdf->stream('clientes.pdf');
	})->name('generar-pdf');
	Route::get('/generar-pdfevento', function () {
		$pdf = PDF::loadView('livewire.eventos-pdf');
		return $pdf->stream('eventos.pdf');
	})->name('generar-pdfevento');