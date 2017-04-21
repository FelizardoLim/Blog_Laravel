<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    function reply_owner() {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
