@extends('app')

@section('content')

    @if($posts->count())
        @foreach($posts as $post)
            <div class="container">
                <article>
                    <h2><a href="{{ action('PostController@show', $post->url) }}">{{ $post->title }}</a></h2>
                    <small>{{ $post->created_at->diffForHumans()}}</small>
                    <hr/>
                    <div class="article-content">
                        {{ $post->body }}
                    </div>
                </article>
            </div>
        @endforeach
    @else
        <h2>Sorry, no posts yet!</h2>
    @endif
@stop