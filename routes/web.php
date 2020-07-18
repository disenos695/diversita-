<?php

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
    return view('principal/index');
});

// Vistas principales
Route::get('/principal/index','VistasController@vistaIndex');

Route::get('/principal/nosotros','VistasController@vistaNosotros');

Route::get('/principal/servicios', 'VistasController@vistaServicios');

Route::get('/principal/blog', 'VistasController@vistaBlog');


// Enviar correo de cliente contatar
Route::post('respuestainv', 'FormatoController@enviocorreo')->name('respuestainv');

Auth::routes();

Route::get('/master', 'HomeController@index')->name('master');

Route::get('/auth', 'HomeController@registrar')->name('register');
