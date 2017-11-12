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

Route::get('/listagem', 	'EstadosController@index');

Route::get('/listagem_v2', 'EstadosController@index_v2');

Route::post('submit', 'EstadosController@busca');