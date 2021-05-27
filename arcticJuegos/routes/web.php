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

Auth::routes();

Route::resource('/juego', 'JuegoController');

Route::get('/carreras', 'JuegoController@carrera');

Route::get('/rpg', 'JuegoController@rpg');

Route::get('/estrategia', 'JuegoController@estrategia');

Route::get('/juegocarrera', function() {
    return view('carreras');
});

Route::get('/juegoestrategia', function() {
    return view('estrategia');
});

Route::get('/juegorpg', function() {
    return view('rpg');
});
Route::get('/home', 'HomeController@index')->name('home');
