@extends('layouts.app')

@section('title', 'Artikel aanpassen')

@section('content')

    <h1>Wijzig het artikel</h1>
    <a href="{{ route('superPosts.index') }}">Terug naar admin overzicht</a>
    {!! Form::model($post, [
        'route'=>['superPosts.update', $post->id],
        'method'=> 'put'
    ]) !!}
    @include('posts.superForm', ['btnText'=>'Pas aan'] )
    {!! Form::close() !!}

@endsection