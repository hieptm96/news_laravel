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

Route::get('/', ['as'=>'home.index', 'uses'=>'HomeController@index']);
Route::get('/{id}', ['as'=>'home.post.show', 'uses'=>'HomeController@show']);

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'categories'], function(){
		Route::get('', ['as'=>'admin.categories.index', 'uses'=>'CategoryController@index']);
		Route::get('new', ['as'=>'admin.categories.create', 'uses'=>'CategoryController@create']);
		Route::post('new', ['as'=>'admin.categories.store', 'uses'=>'CategoryController@store']);
		Route::get('edit/{id}', ['as'=>'admin.categories.edit', 'uses'=>'CategoryController@edit']);
		Route::post('edit/{id}', ['as'=>'admin.categories.update', 'uses'=>'CategoryController@update']);
		Route::get('delete/{id}', ['as'=>'admin.categories.delete', 'uses'=>'CategoryController@delete']);
	});

	Route::group(['prefix'=>'posts'], function(){
		Route::get('', ['as'=>'admin.posts.index', 'uses'=>'PostController@index']);
		Route::get('new', ['as'=>'admin.posts.create', 'uses'=>'PostController@create']);
		Route::post('new', ['as'=>'admin.posts.store', 'uses'=>'PostController@store']);
		Route::get('edit/{id}', ['as'=>'admin.posts.edit', 'uses'=>'PostController@edit']);
		Route::post('edit/{id}', ['as'=>'admin.posts.update', 'uses'=>'PostController@update']);
		Route::get('delete/{id}', ['as'=>'admin.posts.delete', 'uses'=>'PostController@delete']);
	});
});
