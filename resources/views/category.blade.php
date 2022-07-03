{{-- @dd($posts) --}}
@extends('layout.main')
@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($posts as $post)

<h2><a href="/blog/{{ $post->slug }}"> {{ $post->title}}</a></h2>
{{-- <h5>By : {{ $post["author"] }}</h5> --}}
<p>{{ $post->excerpt }}</p>
@endforeach

@endsection
