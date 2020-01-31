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


Route::post('/usuarios', 'UsuariosController@store')->name('usuarios.store');
Route::get('/usuarios','UsuariosController@index')->name('usuarios.index');
Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');
Route::patch('/usuarios/{id}', 'UsuariosController@update')->name('usuarios.update');
Route::get('/usuarios/{id}', 'UsuariosController@show')->name('usuarios.show');
Route::delete('/usuarios/{id}', 'UsuariosController@destroy')->name('usuarios.destroy');
Route::get('usuarios/{id}/edit', 'UsuariosController@edit')->name('usuarios.edit');


Route::post('/lecciones', 'LeccionesController@store')->name('lecciones.store');
Route::get('/lecciones','LeccionesController@index')->name('lecciones.index');
Route::get('/lecciones/create','LeccionesController@create')->name('lecciones.create');
Route::patch('/lecciones/{id}', 'LeccionesController@update')->name('lecciones.update');
Route::get('/lecciones/{id}', 'LeccionesController@show')->name('lecciones.show');
Route::delete('/lecciones/{id}', 'LeccionesController@destroy')->name('lecciones.destroy');
Route::get('lecciones/{id}/edit', 'LeccionesController@edit')->name('lecciones.edit');


Route::post('/especializaciones', 'EspecializacionesController@store')->name('especializaciones.store');
Route::get('/especializaciones','EspecializacionesController@index')->name('especializaciones.index');
Route::get('/especializaciones/create','EspecializacionesController@create')->name('especializaciones.create');
Route::patch('/especializaciones/{id}', 'EspecializacionesController@update')->name('especializaciones.update');
Route::get('/especializaciones/{id}', 'EspecializacionesController@show')->name('especializaciones.show');
Route::delete('/especializaciones/{id}', 'EspecializacionesController@destroy')->name('especializaciones.destroy');
Route::get('especializaciones/{id}/edit', 'EspecializacionesController@edit')->name('especializaciones.edit');


Route::post('/cursos', 'CursosController@store')->name('cursos.store');
Route::get('/cursos','CursosController@index')->name('cursos.index');
Route::get('/cursos/create','CursosController@create')->name('cursos.create');
Route::patch('/cursos/{id}', 'CursosController@update')->name('cursos.update');
Route::get('/cursos/{id}', 'CursosController@show')->name('cursos.show');
Route::delete('/cursos/{id}', 'CursosController@destroy')->name('cursos.destroy');
Route::get('cursos/{id}/edit', 'CursosController@edit')->name('cursos.edit');