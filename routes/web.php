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
    return view('welcome');
});

Route::resources([
    'alumnos' => 'App\Http\Controllers\AlumnosController',

]);
Route::post('/mandarAudio', 'App\Http\Controllers\AlumnosController@audio')->name('audio');
Route::get('/consulta/','App\Http\Controllers\AlumnosController@volver')->name('volver');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
