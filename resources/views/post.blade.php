@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 bg">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/posts">Back to posts</a>
            </div>
        </div>
    </div>

@endsection 