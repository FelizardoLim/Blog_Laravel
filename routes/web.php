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

// for return view(auth/login); --- specific file location compared to below
// pinpoints specific route
Route::get('/', function () {
    return view('auth/login');
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

Route::get('feed', 'ArticlesController@showAllFeed');
Route::get('feed/{id}', 'ArticlesController@showFeed');
Route::post('feed/{id}/edit_comment', 'ArticlesController@saveEditedComment');
Route::get('feed/{id}/delete_comment', 'ArticlesController@deleteComment');

Route::get('profile', 'ArticlesController@showProfile');
Route::post('upload_avatar', 'ArticlesController@uploadAvatar');

Route::post('feed/{id}/reply', 'RepliesController@addReply');
Route::post('feed/{id}/edit_reply', 'RepliesController@saveEditedReply');
Route::get('feed/{id}/delete_reply', 'RepliesController@deleteReply');


// Route::post('upload_avatar', 'ArticlesController@uploadAvatar');


// not being used?
// Route::get('feed/{id}/edit', 'ArticlesController@editArticle');
// Route::post('feed/{id}/edit', 'ArticlesController@saveEditedArticle');