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
                </li>
            @endforeach
        </ul>
    @endif
@endsection