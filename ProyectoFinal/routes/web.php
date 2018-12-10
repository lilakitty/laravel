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

Route::get('/','paginasController@index');
Route::get('/inicio','paginasController@inicio');
Route::get('/administrar_proyecto','paginasController@administrar_proyecto');
Route::get('/agregar_proyecto','paginasController@agregar_proyecto');
Route::get('/editar_proyecto','paginasController@editar_proyecto');
Route::get('/miperfil','paginasController@miperfil');
Route::get('/miempresa','paginasController@miempresa');
Route::get('/propuesta','paginasController@propuesta');