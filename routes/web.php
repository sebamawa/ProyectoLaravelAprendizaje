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


//rutas de pruebas

//closure
Route::get('/prueba1', function() {
    return 'Esto es una prueba';
});

//parametros en ruta y closure
Route::get('users/{id}/{phone}', function($id, $phoneReal) {
    return 'Usuario: ' . $id . ' - Phone: ' . $phoneReal; //solo tener en cuenta orden de
        // parametros en rutas y en lista de closure (no nombres)
});

//ruta a metodo de controller con parametro opcional
Route::get('/prueba2/{id?}', 'WelcomeController@index');

//closure con parametro regex
Route::get('/prueba3/{id}', function($id) {
    return 'Id = ' . $id;
})->where('id', '[0-9]+'); //where(['id'=>'[0-9]+', 'username'=>'[A-Za-z]+']);

//nombre (alias) para ruta
Route::get('/pruebas/{id?}', 'WelcomeController@show')->name('pruebas.show'); //convencion para nombres
                                            //de ruta de controlador: resourcePluaral.action

Route::get('/home', 'TaskController@home');

//rutas de resource controller
Route::resource('/customers', 'CustomerController');