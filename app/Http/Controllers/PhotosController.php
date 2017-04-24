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
    	$filename = 'photo'.Auth::user()->id.".$ext";

    	if($file) {
    		Storage::disk('public')->put($filename, File::get($file));
    		$new_photo = new Photo();
    		$new_photo->caption = $request->caption;
    		$new_photo->photo_src = $filename;
    		$new_photo->user_id = Auth::user()->id;
    		$new_photo->save();
    	}

    	return back();
    }
}
