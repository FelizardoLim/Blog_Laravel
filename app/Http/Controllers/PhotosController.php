<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Photo; 
use App\Comment;
use App\User;
use App\Profile;
use App\Reply;
use Auth;
use Session;
use Storage;
use File;
use Response;

class PhotosController extends Controller
{
    function uploadPhoto(Request $request) {
    	$file = $request->file('photo');
    	$ext = $file->guessClientExtension();
        // created an Article instance to create photo_posts as article posts and connect to comments/reply.
        $new_article_photo = new Article();
        $new_article_photo->title = ' ';
        $new_article_photo->content = ' ';
        $new_article_photo->user_id = Auth::user()->id;
        $new_article_photo->save();
    	$filename = 'photo'.$new_article_photo->id.".$ext";

    	if($file) {
    		Storage::disk('local_photo')->put($filename, File::get($file));
    		$new_photo = new Photo();
    		$new_photo->caption = $request->caption;
    		$new_photo->photo_src = $filename;
    		$new_photo->user_id = Auth::user()->id;
            $new_photo->article_id = $new_article_photo->id;
    		$new_photo->save();
    	}

    	return back();
    }

    function saveEditedPhoto($id, Request $request) {
        if($request->file('photo')){
            $file = $request->file('photo');
            $ext = $file->guessClientExtension();
            $filename = 'photo'.$id.".$ext";

            if($file) {
                Storage::disk('local_photo')->put($filename, File::get($file));
                $edit_photo = Article::find($id)->photo;
                $edit_photo->caption = $request->caption; 
                $edit_photo->photo_src = $filename; 
                $edit_photo->save();
            }

        } else {
            $edit_photo = Article::find($id)->photo;
            $edit_photo->caption = $request->caption; 
            $edit_photo->save();
        }

        Session::flash('message', 'Photo Successfully Edited!');
        return back();
    }

    function deletePhoto($id) {
        $delete_photo = Article::find($id)->photo;
        $delete_photo->delete();

        $delete_article = Article::find($id);
        $delete_article->delete();

// check

        Storage::disk('local_photo')->delete(Article::find($id)->photo->photo_src);
// check

        Session::flash('message', 'Photo Successfully Deleted!');
        return redirect('feed');
    }
}
