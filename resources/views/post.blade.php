@extends('layouts.main')

@section('container')
<article>
        <h2>{{ $post["title"] }}</h2>
        <p>By : <a href="#">{{ $post->user->name }}</a> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/posts">Back to posts</a>
@endsection 