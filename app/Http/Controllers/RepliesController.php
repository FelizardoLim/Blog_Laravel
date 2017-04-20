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

class RepliesController extends Controller
{
    function addReply($id, Request $request) {
    	$new_reply = new Reply();
    	$new_reply->reply_content = $request->reply;
    	$new_reply->user_id = Auth::user()->id;
    	$new_reply->comment_id = $id;
    	$new_reply->save();

    	Session::flash('message', 'Reply Successfully Created!');
    	return back();
    }

    function saveEditedReply($id, Request $request) {
    	$edit_reply = Reply::find($id);
    	$edit_reply->reply_content = $request->reply;
    	$edit_reply->save();

    	Session::flash('message', 'Reply Successfully Edited!');
    	return back();
    }

    function deleteReply($id) {
    	$delete_reply = Reply::find($id);
    	$delete_reply->delete();

    	Session::flash('message', 'Reply Successfully Deleted!');
    	return back();
    }
}