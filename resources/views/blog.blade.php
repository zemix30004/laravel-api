@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Blog</h1>
    @foreach($posts as $post)
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->body }}</p>
    @endforeach
            </div>
        </div>
    </div>
    @endsection
    </code>
