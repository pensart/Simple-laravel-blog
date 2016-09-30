@extends('layouts.app')

@section('title', 'Artikel aanpassen')

@section('content')

    <h1>Wijzig het artikel</h1>
    <a href="{{ route('posts.index') }}">Terug naar admin overzicht</a>
    {!! Form::model($post, [
        'route'=>['posts.update', $post->id],
        'method'=> 'put'
    ]) !!}
    @include('posts.form', ['btnText'=>'Pas aan'] )
    {!! Form::close() !!}

@endsection