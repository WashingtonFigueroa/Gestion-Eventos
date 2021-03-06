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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas del controlador de Organizacion
Route::get('/crear-organizacion',array(
    'as' => 'createOrganizacion',
    'middleware' => 'auth',
    'uses' => 'OrganizacionController@index'
));

Route::get('/crear-evento',array(
    'as' => 'createevento',
    'middleware' => 'auth',
    'uses' => 'EventoController@index'
));
