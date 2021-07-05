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

Auth::routes();

Route::get('/', 'NoticiasController@home')->name('home');

Route::get('/ver-noticia/{id}', 'NoticiasController@verNoticia')->name('ver-noticia');

Route::get('/gestor', 'GestorController@gestor')->name('gestor');
Route::get('/gestor/nueva-noticia', 'GestorController@nuevaNoticia')->name('nueva-noticia');
Route::post('/gestor/guardar-noticia', 'GestorController@guardaNoticia')->name('guardar-noticia');
Route::get('/gestor/borrar-noticia/{id}','GestorController@borrarNoticia')->name('borrar-noticia');
Route::get('/gestor/editar-noticia/{id}','GestorController@editarNoticia')->name('editar-noticia');
Route::post('/gestor/actualizar-noticia/{id}', 'GestorController@actualizarNoticia')->name('actualizar-noticia');
