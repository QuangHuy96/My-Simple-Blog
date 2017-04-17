<?php

use App\Article;
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

Route::get('/','PagesController@index');

Route::get('/home',[
	'as' => 'page.home',
	'uses' => 'PagesController@home'
]);

Route::get('/articles',[
	'as' => 'article.index',
	'uses' => 'ArticlesController@index']);

Route::get('/articles/create',[
	'middleware' => 'auth',
	'as' => "article.create",
	'uses' => 'ArticlesController@create'
]);

Route::post('/articles/store',[
	'as' => 'article.store',
	'uses' => 'ArticlesController@store'
]);

Route::get('/articles/{id}',[
	'as'=>'article.show',
	'uses'=>'ArticlesController@show'
]);

Route::put('/articles/{id}',[
	'as' => 'article.update',
	'uses' => 'ArticlesController@update'
]);

Route::get('/articles/{id}/edit',[
	'middleware' => 'auth',
	'as' => 'article.edit',
	'uses' => 'ArticlesController@edit'
]);


Route::delete('/articles/{id}',[
	'as' => 'article.delete',
	'uses' => 'ArticlesController@delete'
]);

Route::get('/logout','Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index');
