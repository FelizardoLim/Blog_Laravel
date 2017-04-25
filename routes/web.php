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

Route::get('home', 'HomeController@index');

// FEED routes
Route::get('feed', 'ArticlesController@showAllFeed');
Route::get('feed/{id}', 'ArticlesController@showFeed');
Route::get('request/{id}', 'ArticlesController@showRequestFeed');
Route::post('feed/create', 'ArticlesController@saveNewFeed');
Route::post('feed/{id}/edit', 'ArticlesController@saveEditedFeed');
Route::get('feed/{id}/delete', 'ArticlesController@deleteFeed');
// COMMENT routes
Route::post('feed/{id}/comment', 'CommentsController@addComment');
Route::post('feed/{id}/edit_comment', 'CommentsController@saveEditedComment');
Route::get('feed/{id}/delete_comment', 'CommentsController@deleteComment');
// UPLOAD routes
Route::get('profile', 'ArticlesController@showProfile');
Route::post('upload_avatar', 'ArticlesController@uploadAvatar');
// REPLY routes
Route::post('feed/{id}/reply', 'RepliesController@addReply');
Route::post('feed/{id}/edit_reply', 'RepliesController@saveEditedReply');
Route::get('feed/{id}/delete_reply', 'RepliesController@deleteReply');
// FOLLOW routes
Route::get('feed/{id}/follow', 'FollowsController@requestToFollow');
Route::get('request', 'FollowsController@showPendingRequest');
Route::get('approve_request/{id}', 'FollowsController@approveRequest');
Route::get('decline_request/{id}', 'FollowsController@declineRequest');
// Post Photo
Route::post('upload_photo', 'PhotosController@uploadPhoto');
Route::post('feed/{id}/edit_photo', 'PhotosController@saveEditedPhoto');
Route::get('feed/{id}/delete_photo', 'PhotosController@deletePhoto');
// Post Video
Route::post('post_video', 'VideosController@addVideo');
Route::post('feed/{id}/edit_video', 'VideosController@saveEditedVideo');
Route::get('feed/{id}/delete_video', 'VideosController@deleteVideo');