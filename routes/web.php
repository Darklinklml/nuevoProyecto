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



Route::get('/', function(){
    return view('home');
})-> name('home');

Route::get('/videojuegos/crear', 'App\Http\Controllers\VideojuegoController@create')->name('videojuego.create');

Route::post('videojuego.create', 'App\Http\Controllers\VideojuegoController@store')->name('videojuego.store');

Route::get('/videojuegos','App\Http\Controllers\VideojuegoController@index')->name('videojuego.index');

Route::get('/videojuegos/{id}','App\Http\Controllers\VideojuegoController@show')->name('videojuego.show');

Route::get('/videojuegos/{videojuego}/editar','App\Http\Controllers\VideojuegoController@edit')->name('videojuego.editar');

Route::patch('/videojuegos/{videojuego}', 'App\Http\Controllers\VideojuegoController@update')->name('videojuego.update');


Route::delete('/videojuegos/{videojuego}', 'App\Http\Controllers\VideojuegoController@destroy')->name('videojuego.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
