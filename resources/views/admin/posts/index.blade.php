@extends('app')
@section('pagetitle')
    All posts
@stop
@section('content')

    @if($posts->count())
        <table class="table table-condensed table-hover">
            <thead>
            <tr>
                <th>Title:</th>
                <th>Type:</th>
                <th>Status:</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->type }}</td>
                    <td>{{ $post->status }}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
    <p>No posts at this moment.</p>
    @endif
@stop