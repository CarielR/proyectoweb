<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/endpoint', 'ApiCursos@metodo');
Route::post('/endpoint', 'ApiCursos@metodo');
Route::get('/servicio', 'ApiServicios@metodo');
Route::post('/servicio', 'ApiServicios@metodo');
Route::get('/evento', 'ApiEventos@metodo');
Route::post('/evento', 'ApiEventos@metodo');
