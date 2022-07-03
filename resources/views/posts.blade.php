
{{-- @dd($post) --}}
@extends('layout.main')
@section('container')
<h2>{{ $post->title }}</h2>
{{-- <h5>By : {{ $post['author'] }}</h5> --}}
<p>By. Fahmi - <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
 {!! $post->body !!}
    <a href="/blog">Back to posts</a>
@endsection
