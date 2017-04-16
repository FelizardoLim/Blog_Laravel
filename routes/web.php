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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('articles', 'ArticlesController@showArticles'); 
Route::get('articles/create', 'ArticlesController@createArticle');
Route::get('articles/{id}', 'ArticlesController@showArticle');
Route::post('articles/create', 'ArticlesController@saveArticle');
Route::get('articles/{id}/edit', 'ArticlesController@editArticle');
Route::post('articles/{id}/edit', 'ArticlesController@saveEditedArticle');
Route::get('articles/{id}/delete', 'ArticlesController@deleteArticle');
Route::post('articles/{id}/comment', 'ArticlesController@addComment');

Route::get('landing', 'ArticlesController@showLanding');