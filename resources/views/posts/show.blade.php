@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light">Go back to posts</a>
    <h1> {{$post->title}} </h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {{$post->content}}
    </div>
@endsection