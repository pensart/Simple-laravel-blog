@extends('layouts.app')

@section('title', 'Nieuw artikel')

@section('content')

    <h1>Schrijf een nieuw artikel</h1>

    <a href="{{ route('posts.index') }}">Terug naar admin overzicht</a>

    {!! Form::open(['route'=>'posts.store']) !!}
        @include('admin.posts.form', ['btnText'=>'Publiceer artikel'] )
    {!! Form::close() !!}

@endsection