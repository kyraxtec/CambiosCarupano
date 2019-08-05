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

Route::get('/home', 'InicioController@index');

Auth::routes();

Route::get('/', 'LoginController@index')->name('login');

Route::get('/usuarios', 'Admin\UsuariosController@index');
Route::get('/usuarios/create', 'Admin\UsuariosController@create');
Route::get('/usuarios/store', 'Admin\UsuariosController@store');



