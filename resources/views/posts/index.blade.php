@extends('layouts.app')

@section('content')
    <div class="text-right mt-3">
        <a href="/posts/create" class="btn btn-primary">Create Post</a>
    </div>
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card bg-faded">
                <h3 class="card-block"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts</p>
    @endif
    {{$posts->links()}}
@endsection