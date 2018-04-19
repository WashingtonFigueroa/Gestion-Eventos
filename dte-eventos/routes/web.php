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
use App\tipoEvento;

Route::get('/prueba', function () {
    $tipos = tipoEvento::all();
    foreach ($tipos as $tipo) {
        echo $tipo->NOMBRETIPOEVENTO.'<br>';
        var_dump($tipo->eventos);
    }
});




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas del controlador de Organizacion
Route::get('/createorganizacion',array(
    'as' => 'createorganizacion',
    'middleware' => 'auth',
    'uses' => 'OrganizacionController@index'
));

Route::get('/createvento',array(
    'as' => 'createvento',
    'middleware' => 'auth',
    'uses' => 'EventoController@index'
));

Route::get('/creatasistente',array(
    'as' => 'creatasistente',
    'middleware' => 'auth',
    'uses' => 'AsistentesController@index'
));

