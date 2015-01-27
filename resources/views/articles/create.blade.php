@extends('master')

@section('content')

    <h1>Write a new article</h1>

    <hr>

    {!! Form::open(['url' => 'articles']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Article title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Article content') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('published_at', 'Publish on') !!}
            {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add article', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop