@extends('layouts.app')
@section('title', 'Bevestigen verwijderen')
@section('content')
    <div class="page-header">
        <h1>Verwijderen van {{ $post->title }} <small>Bent u zeker?</small></h1>
    </div>
    {!! Form::model($post, [
        'method' => 'delete',
        'route' => ['posts.destroy', $post->id]
    ]) !!}
    {{ csrf_field() }}
    {!! Form::submit('Ja ik ben zeker', ['class'=>'btn btn-danger']) !!}
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Annuleren!</a>
    {!! Form::close() !!}
@endsection