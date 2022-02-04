@extends('layouts.admin')

@section('title')
    | Post - {{ $post->title }}
@endsection

@section('content')
    <div class="container">

        <h1>{{ $post->title }}</h1>

        <p>{{ $post->content }}</p>

        <a href="{{ route('admin.posts.index') }}">Back Lista Post</a>

    </div>
@endsection
