@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Alumnis</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Log In</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
  </div>
@endsection
