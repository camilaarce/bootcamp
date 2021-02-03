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

Route::resource('paises', 'App\Http\Controllers\PaisController');

Route::resource('provincias', 'App\Http\Controllers\ProvinciaController');

Route::resource('localidades', 'App\Http\Controllers\LocalidadController');

Route::resource('eventos', 'App\Http\Controllers\EventoController');

Route::resource('asistentes', 'App\Http\Controllers\AsistenteController');

Route::get('search/eventos', 'App\Http\Controllers\SearchController@eventos')->name('search.eventos');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
