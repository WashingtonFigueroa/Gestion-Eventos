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

//CRUD ORGANIZACION
Route::get('/createorganizacion',array(
    'as' => 'createorganizacion',
    'middleware' => 'auth',
    'uses' => 'OrganizacionController@index'
));
Route::post('/saveOrganizador',array(
    'as' => 'saveOrganizador',
    'middleware' => 'auth',
    'uses' => 'OrganizacionController@saveOrganizador'
));

//CRUD EVENTO
Route::get('/createvento',array(
    'as' => 'createvento',
    'middleware' => 'auth',
    'uses' => 'EventoController@index'
));
Route::post('/saveEvento',array(
    'as' => 'saveEvento',
    'middleware' => 'auth',
    'uses' => 'EventoController@saveEvento'
));

//CRUD TIPO ASISTENTES
Route::get('/creatasistente',array(
    'as' => 'creatasistente',
    'middleware' => 'auth',
    'uses' => 'AsistentesController@index'
));
Route::post('/saveAsistente',array(
    'as' => 'saveAsistente',
    'middleware' => 'auth',
    'uses' => 'AsistentesController@saveAsistente'
));

//CRUD TIPO EVENTO
Route::get('/crearTipoEvento',array(
    'as' => 'crearTipoEvento',
    'middleware' => 'auth',
    'uses' => 'tipoEventoController@index'
));
Route::post('/saveTipoEvento',array(
    'as' => 'saveTipoEvento',
    'middleware' => 'auth',
    'uses' => 'tipoEventoController@saveTipoEvento'
));