<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Photo; 
use App\Video;
use App\Comment;
use App\User;
use App\Profile;
use App\Reply;
use Auth;
use Session;
use Storage;
use File;
use Response;

class VideosController extends Controller
{
    function addVideo(Request $request) {

    	$new_article_video = new Article();
    	$new_article_video->title = ' ';
    	$new_article_video->content = ' ';
    	$new_article_video->user_id = Auth::user()->id;
    	$new_article_video->save();

    	$new_video = new Video();
    	$new_video->video_src = $request->video_src;
    	$new_video->video_caption = $request->video_caption;
    	$new_video->user_id = Auth::user()->id;
    	$new_video->article_id = $new_article_video->id;
    	$new_video->save();

    	return back();
    }

    function saveEditedVideo($id, Request $request) {
        $edit_article_video = Article::find($id)->video;
        $edit_article_video->video_src = $request->video_src;
        $edit_article_video->video_caption = $request->video_caption;
        $edit_article_video->save();

        Session::flash('message', 'Video Successfully Edited!');
        return back();
    }

    function deleteVideo($id) {
        $delete_video_videoinfo = Article::find($id)->video;
        $delete_video_videoinfo->delete();

        $delete_video_article = Article::find($id);
        $delete_video_article->delete();

        Session::flash('message', 'Video Successfully Deleted!');
        return redirect('feed');
    }
}
