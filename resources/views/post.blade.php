
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["judul"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/blog/">Back to posts</a>
@endsection