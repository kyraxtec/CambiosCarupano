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
Route::get('/', 'Secure\LoginController@index')->name('login');
Route::get('/secure/login', 'Secure\LoginController@index')->name('login');
Route::post('/secure/login', 'Secure\LoginController@login')->name('login_post');
Route::get('secure/logout', 'Secure\loginController@logout')->name('logout');
Route::get('/midred', 'MidRedController@index')->name('midred');
Route::get('/secure/create', 'Secure\UsuariosController@create');
Route::get('/secure/store', 'Secure\UsuariosController@store');


//RUTAS MODO ADMINISTRADOR
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function(){

    Route::get('/adminhome', 'AdminController@index')->name('adminhome');
    //BANCOS
    Route::resource('bancos', 'BancosController');

    //TASAS
    Route::resource('tasas', 'TasaController');
    Route::get('tasas/{id}/destroy', [
        'uses' => 'TasaController@destroy',
        'as' => 'tasas.destroy'
    ]);

    //USUARIOS
    Route::resource('usuarios', 'UsuariosController');
    
    //PERFIL DE USUARIO
    Route::resource('perfil', 'PerfilUsuarioController');
    Route::resource('datospersonales', 'DatosPersonalesController');
    Route::resource('datosbancarios', 'DatosBancariosController');
    Route::resource('domicilio', 'DomicilioController');

});

//RUTAS MODO USUARIO
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => 'auth'], function(){

    Route::get('/userhome', 'UserController@index')->name('userhome');
    //BANCOS
    //USUARIOS


});







