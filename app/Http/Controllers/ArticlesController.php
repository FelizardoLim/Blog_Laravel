<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\User;
use App\Profile;
use Auth;
use Session;
use Storage;
use File;
use Response;

class ArticlesController extends Controller
{
    function showArticles() {
    	$articles = Article::all();
        $users = User::all();
    	return view ('article/display', compact('articles', 'users'));
    }

    function showArticle($id) {
    	$article = Article::find($id);
    	return view('article/display_one_article', compact('article'));
    }

    function createArticle() {
    	return view('article/create');
    }

    function saveArticle(Request $request) {
    	$new_article = new Article(); 
    	$new_article->title = $request->title;
    	$new_article->content = $request->content; 
        $new_article->user_id = Auth::user()->id;
    	$new_article->save();

    	Session::flash('message', 'Article Successfully Created!');
    	return redirect('articles');
    }

    function editArticle($id) {
    	$article_to_edit = Article::find($id);
    	return view('article/edit', compact('article_to_edit'));
    }

    function saveEditedArticle($id, Request $request) {
    	$article_to_edit = Article::find($id);
    	$article_to_edit->title = $request->title;
    	$article_to_edit->content = $request->content;
    	$article_to_edit->save();

    	Session::flash('message', 'Article Successfully Edited!');
    	return redirect('articles');
    }

    function deleteArticle($id) {
    	$article_to_delete = Article::find($id);
    	$article_to_delete->delete();

    	Session::flash('message', 'Article Successfully Deleted!');
    	return redirect('articles');
    }

	function addComment($id, Request $request) {
		$new_comment = new Comment();
		$new_comment->content = $request->comment;
		$new_comment->user_id = Auth::user()->id;
		$new_comment->article_id = $id;
		$new_comment->save();

		//ask why 'articles/$id' doesnt work. double quotes required. 
        Session::flash('message', 'Comment Successfully Created!');
		return redirect("articles/$id");
	}

    function saveEditedComment($comment_id, Request $request) {
        $edit_comment = Comment::find($comment_id);
        // added to enable redirect to the correct page. otherwise not necessary for delete/add function
        $article_id = $edit_comment->article_id;
        $edit_comment->content = $request->comment;
        $edit_comment->save();

        Session::flash('message', 'Comment Successfully Edited!');
        return redirect("feed/$article_id");
    }

    function deleteComment($comment_id) {
        $delete_comment = Comment::find($comment_id);
        // added to enable redirect to the correct page. otherwise not necessary for delete/add function
        $article_id = $delete_comment->article_id;
        $delete_comment->delete();

        Session::flash('message', 'Comment Successfully Deleted!');
        return redirect("feed/$article_id");
    }

    function showLanding() {
        $users = User::all();
        $avatar = Auth::user()->profile->avatar_src;
        return view('layouts/landing', compact('users','avatar'));
    }


    function showAllFeed() {
        $users = User::all();
        $avatar = Auth::user()->profile->avatar_src;
        return view('article/display', compact('users','avatar'));
    }

    function showFeed($id) {
        $article = Article::find($id);
        return view('article/display_one_article', compact('article'));
    }

    function showProfile() {
        return view('profile/account');
    }

    function uploadAvatar(Request $request) {

        $file = $request->file('avatar');
        $ext = $file->guessClientExtension();
        $filename = 'avatar'.Auth::user()->id.".$ext";

        if($file) {
            Storage::disk('local')->put($filename, File::get($file));
            $user_profile = Auth::user()->profile;
            $user_profile->avatar_src = $filename;
            $user_profile->save();
        }

        return redirect('profile');
    }


    // function uploadAvatar() {
    //     request()->file('avatar')->store('avatars');

    //     $file = request()->file('avatar');
    //     $ext = $file->guessClientExtension();
    //     $file->storeAs('avatars/' . Auth::user()->id, "avatar.{$ext}");

    //     $user_profile = Auth::user()->profile;
    //     $user_profile->avatar_src = 'app/avatars/' . Auth::user()->id. "/avatar.{$ext}";
    //     $user_profile->save();

    //     return back(); 
    // }
}
