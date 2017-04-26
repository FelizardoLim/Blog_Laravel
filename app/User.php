<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    function articles() {
        return $this->hasMany('App\Article');
    }

    function sort_articles_from_latest(){
        return $this->articles->sortByDesc('updated_at');
    }

    function photos() {
        return $this->hasMany('App\Photo');
    }

    function videos() {
        return $this->hasMany('App\Video');
    }

    function profile() {
        return $this->hasOne('App\Profile');
    }

    function replies() {
        return $this->hasMany('App\Reply');
    }

    function followRequest() {
        return $this->belongsToMany('App\User', 'follow', 'requester', 'approver');
    }

    function pendingRequest() {
        return $this->belongsToMany('App\User', 'follow', 'approver', 'requester');
    }

    function myFriends() {
        return $this->followRequest()->wherePivot('status',1)->get()->merge($this->pendingRequest()->wherePivot('status',1)->get());
    }

    function declineRequest(User $user) {
        //DB::table('follow')->where('id', $id)->delete();
        Auth::user()->pendingRequest()->detach($user->id);
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
