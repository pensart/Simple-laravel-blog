@extends('layouts.app')

@section('title', 'Admin overzicht')

@section('content')
    <h1>Artikels</h1>
    <a href="{{ route('posts.create') }}">Schrijf een artikel</a>
    @if($posts->count())
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('posts.edit', $post->id) }}">{{ $post->title  }}</a>
                    <a href="{{ route('posts.confirm', $post->id) }}" class="link--remove">Remove</a>
                </li>
            @endforeach
        </ul>
        {{ $posts->links() }}
    @else
        <p>Er zijn nog geen artikels aanwezig</p>
    @endif
@endsection