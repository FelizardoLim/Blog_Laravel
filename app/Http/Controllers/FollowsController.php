<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

class FollowsController extends Controller
{
    function requestToFollow($id) {
    	DB::table('follow')->insert(
    		['requester' => Auth::user()->id, 'approver' => $id, 'status' => 0]
    	);

    	return back();
    }

    function showPendingRequest() {
    	$pending_request = Auth::user()->pendingRequest()->wherePivot('status',0)->get();

    	return view('follow/follow_request', compact('pending_request'));
    }

    function approveRequest($id) {
    	Auth::user()->pendingRequest->where('id',$id)->first()->pivot->update(['status' => 1]);

    	return back();
    }

   function declineRequest($id) {
   		$user = User::find($id);
   		Auth::user()->declineRequest($user);

   		return back();
    }
}
