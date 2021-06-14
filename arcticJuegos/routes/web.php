<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
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

Route::resource('/juegoclave', 'JuegoClavesController');

Route::resource('/factura','FacturaController');

Route::get('/carreras', 'JuegoController@carrera');

Route::get('/aventura', 'JuegoController@aventura');

Route::get('/rpg', 'JuegoController@rpg');

Route::get('/accion','JuegoController@accion');

Route::get('/estrategia','JuegoController@estrategia');

Route::get('/juegocarrera', function() {
    return view('carreras');
});

Route::get('/juegoestrategia', function() {
    return view('estrategia');
});

Route::get('/juegorpg', function() {
    return view('rpg');
});

Route::get('/juegoaventura', function() {
    return view('aventura');
});

Route::get('/juegoaccion', function() {
    return view('accion');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/sendemail', function () {
    if(Request::get('nombre')!=null)
    $data = array('idfact' => Request::get('idfactura'), 'nombre' => Request::get('nombre'), 'nombregame' => Request::get('nombrejuego'), 'nombreclv' => Request::get('nombreclave'), 'apellido' => Request::get('apellido'), 'pagocancel' => Request::get('pagocancelado') );
    else
    $data= array('bodyMessage' => 'Hola este es un mensaje');

    Mail::send('email', $data, function ($message) {
        $message->from('vladi.vemf@hotmail.com', 'Arctic Games Universe');
        // $message->from('vemf.vemf@hotmail.com', 'Arctic Games Universe');
        $message->to(Request::get('email'))->subject('Factura de Compra (A.G.U.)');
    });
    return Redirect::back();
});
