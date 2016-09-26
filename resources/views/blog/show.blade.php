@extends('layouts.frontend')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p class="created_at">
        Artikel datum {{ $post->created_at->format("d-m-Y") }}, door {{ $post->user->name }}
    </p>
    <p>{{ $post->body }}</p>
    <p><a href="{{ route('blog.index') }}">Terug naar overzicht</a></p>
@endsection