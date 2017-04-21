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

class ArticlesController extends Controller
{
    function showAllFeed() {
        // if displaying all users and not just existing friends
        $avatar = Auth::user()->profile->avatar_src;
        
        // used to push existing auth user articles into feed page
        // $users[] = Auth::user();
        // display all
        // $users = User::all();
        // display not friends
        $notFriends =  User::all()->diff(Auth::user()->myFriends());
        // display friends
        $users = Auth::user()->myFriends();
        $users->push(Auth::user());
        // push personal profile into main page.

        return view('article/display', compact('users','avatar','notFriends', 'friends'));
    }

    function showFeed($id) {
        $article = Article::find($id);
        return view('article/display_one_article', compact('article'));
    }

    function saveNewFeed(Request $request) {
        $new_article = new Article(); 
        $new_article->title = $request->title;
        $new_article->content = $request->content; 
        $new_article->user_id = Auth::user()->id;
        $new_article->save();

        Session::flash('message', 'Article Successfully Created!');
        return back();
    }

    function saveEditedFeed($id, Request $request) {
        $article_to_edit = Article::find($id);
        $article_to_edit->title = $request->title;
        $article_to_edit->content = $request->content;
        $article_to_edit->save();

        Session::flash('message', 'Article Successfully Edited!');
        return back();
    }

    function deleteFeed($id) {
        $article_to_delete = Article::find($id);
        $article_to_delete->delete();

        Session::flash('message', 'Article Successfully Deleted!');
        return redirect('feed');
    }

    function showProfile() {
        return view('profile/account');
    }

    function uploadAvatar(Request $request) {
        dd($request);
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
