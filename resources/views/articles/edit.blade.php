@extends('master')

@section('content')

    <h1>Edit article: {!! $article->title !!}</h1>

    <hr>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.form', ['submitButtonText' => 'Update article']);
    {!! Form::close() !!}

    @include('errors.list')

@stop