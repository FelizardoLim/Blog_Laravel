<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function owner() {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    function replies() {
    	return $this->hasMany('App\Reply');
    }
}
