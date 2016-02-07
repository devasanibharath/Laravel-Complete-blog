<?php

Route::get('/', [
	'uses' => 'WelcomeController@index',
	'as' => 'home'
]);

Route::get('post/{slug}', [
	'as' => 'article',
	'uses' => 'WelcomeController@article'
]);

Route::get('category/{category}',[
	'as' => 'catposts',
	'uses' => 'CategoryController@catposts'
]);

Route::get('/tag/{tag}', [
	'as' => 'tagged',
	'uses' => 'WelcomeController@tags'
]);

Route::get('/admin', [
	'as' => 'adminsite',
	'uses' => 'AdminController@desktop'
]);

Route::get('/category',[
	'as' => 'catesite',
	'uses' => 'CategoryController@desktop'
]);

Route::get('/desktop', 'AdminController@desktop');

Route::get('admin/category','CategoryController@desktop');

Route::get('admin/posts/{id}/edit', 'AdminController@edit');

Route::get('admin/category/{id}/edit','CategoryController@edit');

Route::post('admin/posts/{id}/refresh', 'AdminController@refresh');

Route::post('admin/category/{id}/refresh','CategoryController@refresh');



Route::get('admin/posts/{id}/delete', 'AdminController@delete');

Route::get('admin/category/{id}/delete','CategoryController@delete');

Route::get('admin/posts/new', [
	'as' => 'newp',
	'uses' => 'AdminController@newp'
]);

Route::post('admin/posts/new', 'AdminController@create');


Route::get('admin/category/new', [
	'as' => 'newc',
	'uses' => 'CategoryController@newc'
]);



Route::post('admin/category/new','CategoryController@create');



Route::get('/logout', [
	'uses' => 'AdminController@logout',
	'as' => 'logout'
]);



/* Social Media Routes */

Route::get('twitter', [
	'as' => 'twitter',
	'uses' => 'WelcomeController@twitter'
]);

Route::get('facebook', [
	'as' => 'facebook',
	'uses' => 'WelcomeController@facebook'
]);

Route::get('youtube', [
	'as' => 'youtube',
	'uses' => 'WelcomeController@youtube'
]);

Route::get('vine', [
	'as' => 'vine',
	'uses' => 'WelcomeController@vine'
]);

Route::get('linkedin', [
	'as' => 'linkedin',
	'uses' => 'WelcomeController@linkedin'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

