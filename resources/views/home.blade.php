@extends('layouts.app')

@section('content')
    <div class="col-sm-8 col-sm-offset-2">
    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object requester_avatar" src="{{ asset('img/'.Auth::user()->profile->avatar_src) }}">
                    </div>
                    <div class="media-body requester_details">
                        <h4 class="media-heading">{{ Auth::user()->name }}</h4>
                        <p>Welcome to my Blog. Enjoy reading!</p>
                    </div>
                </div>
            </div>
        </div>    
    @foreach(Auth::user()->articles as $article)
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-10">
                            <h3> {{ $article->title }} </h3>
                        </div>
                        @if($article->user_id == Auth::user()->id)
                        <div class="col-xs-2">
                            <nav class="dropdown text-right">
                                <button class="btn btn-default dropdown-toggle" type="button" id="actions_dd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actions_dd">
                                    <li><a data-toggle="modal" data-target="#edit_article{{ $article->id }}">Edit</a></li>
                                    <li><a data-toggle="modal" data-target="#delete_article{{ $article->id }}">Delete</a></li>    
                                </ul>
                            </nav>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- for edit / delete feed modals -->
                @include ('article/edit')
                @include ('article/delete')
                <div class="panel-body">
                    <p> {!! html_entity_decode($article->content) !!} </p>
                </div>
            </div>
    @endforeach
    </div>
@endsection