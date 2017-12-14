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



Route::group(['middleware'=>'guest'],function(){

	Route::get('/',[
			'uses'=> 'UserController@getHome',
			'as'=> 'guest.home'
		]);

	Route::post('/signin',[
		'uses' => 'UserController@postLogin',
		'as' => 'guest.login'
	]);

});

Route::group(['middleware'=>'auth'],function(){

	Route::get('/profile',[
			'uses'=> 'UserController@getProfile',
			'as'=> 'user.home',
			'prefix'=> 'user'
		]);

	Route::get('/logout',[
			'uses'=> 'UserController@getLogout',
			'as'=> 'user.logout',
			'prefix'=> 'user'
		]);

	Route::get('/tambah',[
			'uses'=> 'UserController@getTambahKeputusan',
			'as'=> 'user.tambah',
			'prefix'=> 'user'
		]);

	Route::get('/histori',[
			'uses'=> 'UserController@getHistori',
			'as'=> 'user.histori',
			'prefix'=> 'user'
		]);

	Route::get('/data',[
			'uses'=> 'UserController@getData',
			'as'=> 'user.data',
			'prefix'=> 'user'
		]);

	Route::post('/data',[
			'uses'=> 'UserController@postData',
			'as'=> 'user.data',
			'prefix'=> 'user'
		]);

	Route::post('/tambah_keputusan',[
			'uses'=> 'UserController@postTambahKeputusan',
			'as'=> 'user.tambah_keputusan',
			'prefix'=> 'user'
		]);



});