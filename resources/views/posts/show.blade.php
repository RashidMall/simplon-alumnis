@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light">Go back to posts</a>
    <h1> {{$post->title}} </h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {!!$post->content!!}
    </div>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection