@extends('layouts.frontend')

@section('title', 'Home')

@section('content')

    @if ($posts->count())
        @foreach($posts as $post)
            <article>
                <h2><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></h2>
                <p class="created_at">
                    Artikel datum {{ $post->created_at->format("d-m-Y") }}, door {{ $post->user->name }}
                </p>
                <p>{{ str_limit($post->body) }}</p>
                <p><a href="{{ route('blog.show', $post->id) }}">Lees meer...</a></p>
            </article>
        @endforeach
    @else
        <p>Helaas geen artikels gevonden!</p>
    @endif

@endsection