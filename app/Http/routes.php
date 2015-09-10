<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as'		=> 	'utama',
	'uses'	=>	'UtamaController@index'
]);

Route::get('/dashboard', [
	'as'		=> 	'dashboard',
	'uses'	=>	'UtamaController@index'
]);

/**
 * Carian
 */
Route::get('/carian', [
	'as'		=> 	'carian.keputusan',
	'uses'	=>	'CarianController@getKeputusan'
]);

/**
 * Tempahan
 */
Route::get('/tempahan/baru', [
	'as'		=> 	'pengguna.tempahan',
	'uses'	=>	'TempahanController@create'
]);

Route::post('/tempahan/baru', [
	'as'		=> 	'pengguna.tempahan',
	'uses'	=>	'TempahanController@store'
]);

/**
 * Pemandu
 */
Route::get('/pemandu', [
	'as'		=> 	'pemandu.index',
	'uses'	=>	'PemanduController@index'
]);
