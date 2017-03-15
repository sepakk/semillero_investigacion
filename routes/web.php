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
Route::group(['middleware' => 'guest'], function () {
	Route::get('/', function () {
    	return view('auth/login');
	});
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index');
	Route::resource('informacion', 'InformacionPersonalController');
	Route::get('/informacion/ciudades/{id}', 'InformacionPersonalController@getCiudades');
	Route::resource('perfeccionamiento', 'PerfeccionamientoController');
	Route::resource('idioma', 'IdiomaController');
	Route::resource('experiencia', 'ExperienciaController');
	Route::resource('productividad', 'ProductividadController');
	Route::resource('escalafones', 'EscalafonController');
});

Route::group(['middleware' => 'usuarioAdmin'], function () {
	
});
Route::group(['middleware' => 'usuarioStandard'], function () {	
});
