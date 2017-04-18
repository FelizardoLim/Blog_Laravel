<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\User;
use Auth;
use Session;

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

		//ask why 'articles/$id' doesnt work. 
		return redirect("articles/$id");
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

    // function editPost() {
        
    // }
}
