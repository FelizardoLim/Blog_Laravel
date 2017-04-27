<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = new Profile();
        $profile->user_id = Auth::user()->id;
        $profile->avatar_src = 'default.png';
        $profile->blog_description = 'Please update your blog description in your Profile';
        $profile->save(); 
        
        return view('home');
    }
}
