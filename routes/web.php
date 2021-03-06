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
		Route::get('nuevo','modulos\activo\activoController@create')->name('act.reg.new');
		Route::post('store','modulos\activo\activoController@store')->name('act.reg.store');
		Route::get('edit/{id}','modulos\activo\activoController@edit')->name('act.reg.edit');
		Route::put('update/{id}','modulos\activo\activoController@update')->name('act.reg.update');
		Route::delete('delete/{id}','modulos\activo\activoController@destroy')->name('act.reg.delete');
});
//Modulo - Usuarios
Route::group(['prefix' => 'amenazas'],function(){
	Route::get('/','modulos\amenaza\amenazaController@index')->name('ame.index');
	Route::get('edit/{id}','modulos\amenaza\amenazaController@edit')->name('ame.edit');
	Route::put('update/{id}','modulos\amenaza\amenazaController@update')->name('ame.update');
	Route::delete('delete/{id}','modulos\amenaza\amenazaController@destroy')->name('ame.delete');
	Route::get('nuevo','modulos\amenaza\amenazaController@create')->name('ame.new');
	Route::post('store','modulos\amenaza\amenazaController@store')->name('ame.store');
});

Route::group(['prefix' => 'caracterizacion'],function(){
		Route::get('/','modulos\caracterizacion\caracterizacionController@index')->name('caract.index');
		Route::get('vermas/{id}','modulos\caracterizacion\caracterizacionController@show')->name('caract.show');
		
		Route::get('nuevo','modulos\caracterizacion\caracterizacionController@create')->name('caract.new');
		Route::post('store','modulos\caracterizacion\caracterizacionController@store')->name('caract.store');

		Route::get('edit/{id}','modulos\caracterizacion\caracterizacionController@edit')->name('caract.edit');
		Route::put('update/{id}','modulos\caracterizacion\caracterizacionController@update')->name('caract.update');
		Route::delete('delete/{id}','modulos\activo\activoController@destroy')->name('act.reg.delete');
});

Route::group(['prefix' => 'riesgos'],function(){
	Route::get('/','modulos\riesgo\riesgoController@index')->name('riesgo.index');

});


