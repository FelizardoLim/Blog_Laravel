<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\User;
use App\Profile;
use App\Reply;
use Auth;
use Session;
use Storage;
use File;
use Response;

class CommentsController extends Controller
{
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
}