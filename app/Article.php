<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    function comments() {
    	return $this->hasMany('App\Comment');
    }

    function photo() {
    	return $this->hasOne('App\Photo');
    }

    function video() {
    	return $this->hasOne('App\Video');
    }
}
