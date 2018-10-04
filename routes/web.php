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



Route::get('/libro', 'LibroController@inicio')->name('libros.index');
Route::get('/libro/crear', 'LibroController@crear')->name('libro.crear');
Route::post('/libro/guardar', 'LibroController@guardar')->name('libro.guardar');
Route::get('/libro/editar/{id}', 'LibroController@editar')->name('libro.editar');
Route::post('/libro/actualizar/{id}', 'LibroController@actualizar')->name('libro.actualizar');
Route::get('/libro/eliminar/{id}', 'LibroController@eliminar')->name('libro.eliminar');