@extends('layouts.app')

@section('content')
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        @if(Session::has('message'))
            <p class="alert alert-success text-center">{{ Session::get('message') }}</p>
        @endif
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object requester_avatar" src="{{ asset('img/'.Auth::user()->profile->avatar_src) }}">
                    </div>
                    <div class="media-body requester_details">
                        <h4 class="media-heading">{{ Auth::user()->name }}</h4>
                        <p>{{ Auth::user()->profile->blog_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @foreach(Auth::user()->sort_articles_from_latest() as $article)
        @if(null===$article->photo && null===$article->video)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-10">
                            <h4><a href='{{ url("feed/$article->id") }}'>{{ $article->title }}</a></h4>
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
        @elseif(null!==$article->video)
            <div class="thumbnail">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="http://www.youtube.com/embed/{{ $article->video->video_src }}" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="caption">
                    <p><a href='{{ url("feed/$article->id") }}'>{!! html_entity_decode($article->video->video_caption) !!}</a></p>
                </div>
            </div>        
        @else
            <div class="thumbnail">
                <a href='{{ url("feed/$article->id") }}'>
                    <img class="img-responsive" src="{{ asset('uploaded_photos/'.$article->photo->photo_src) }}">
                </a>
                <div class="caption">
                    <p>{!! html_entity_decode($article->photo->caption) !!}</p>
                </div>
            </div>
        @endif
    @endforeach
    </div>
@endsection