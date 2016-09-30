@extends('layouts.app')

@section('title', 'Nieuw artikel')

@section('content')

    <h1>Schrijf een nieuw artikel</h1>

    <a href="{{ route('superPosts.index') }}">Terug naar admin overzicht</a>

    {!! Form::open(['route'=>'superPosts.store']) !!}
        @include('posts.SuperForm', ['btnText'=>'Publiceer artikel'] )
    {!! Form::close() !!}

@endsection