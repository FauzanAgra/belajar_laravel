@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}

    <a href="/posts" class="btn btn-danger"> Back To Posts</a>

@endsection