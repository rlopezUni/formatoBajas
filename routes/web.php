<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function () {
Route::resources([
    'alumnos' => 'App\Http\Controllers\AlumnosController',
]);

Route::post('/mandarAudio', 'App\Http\Controllers\AlumnosController@audio')->name('audio');
Route::get('/descargaAudio/{id}', 'App\Http\Controllers\AlumnosController@descargar_audio')->name('alumno.audio');
Route::get('/consulta/','App\Http\Controllers\AlumnosController@volver')->name('volver');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\AlumnosController@volver')->name('dashboard');


