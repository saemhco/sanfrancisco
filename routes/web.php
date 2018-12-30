<?php
use Illuminate\Http\Request;
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
    //return view('plantilla.usuario');
	return view('ingreso');
});

// Authentication Routes...
Route::post('login', 'Auth\LoginController@login');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');       
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Ajustar Usuario
Route::group(['prefix' => 'ajustes'],function(){
	Route::get('index', 'Auth\AjustesUserController@index')->name('ajustes.index');
	Route::post('update', 'Auth\AjustesUserController@update')->name('ajustes.update');
	Route::put('foto', 'Auth\AjustesUserController@img_update')->name('ajustes.foto');
});


//Modulo - Usuarios
Route::group(['prefix' => 'usuario'],function(){
	Route::group(['prefix' => 'nuevo'],function(){
		Route::get('/','Auth\UsersController@index')->name('usuario.nue.index');
		Route::get('datos','Auth\UsersController@datatables')->name('usuario.nue.datos');
		Route::post('validar', 'Auth\UsersController@validar')->name('usuario.nue.validar');	
		Route::put('update/{id}','Auth\UsersController@update')->name('usuario.nue.update');
		Route::get('mostrar/{id}','Auth\UsersController@show')->name('usuario.nue.show');

	});   
});

//Modulo - Usuarios
// Route::group(['prefix' => 'activos'],function(){
// 		Route::get('/','modulos\activo\activoController@index')->name('activos.index');
// 		Route::post('nuevo','Auth\UsersController@datatables')->name('usuario.nue.datos');
// 		Route::put('editar', 'Auth\UsersController@validar')->name('usuario.nue.validar');	
// 		Route::get('eliminar','Auth\UsersController@update')->name('usuario.nue.update');
// });

//Modulo - Usuarios
Route::group(['prefix' => 'activos'],function(){
		Route::get('identificacion','modulos\activo\activoController@index')->name('act.reg.index');
		Route::get('nuevo','modulos\activo\activoController@store')->name('act.reg.nuevo');
		Route::get('edit','modulos\activo\activoController@edit')->name('act.reg.edit');
});



