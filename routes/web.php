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


Route::get('/','Vistas\VistasController@index')->name('/');
Route::get('servicios','Vistas\VistasController@servicios')->name('servicios');
Route::get('productos','Vistas\VistasController@productos')->name('productos');
Route::get('contacto','Vistas\VistasController@contacto')->name('contacto');