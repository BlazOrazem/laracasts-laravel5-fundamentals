@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left" style="padding-top: 8px;">Write a new article</h1>
                        <a href="{{ action('ArticlesController@index') }}" class="btn btn-info pull-right">&laquo; Back to articles</a>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'articles']) !!}
                            @include('articles.form', ['submitButtonText' => 'Add an article'])
                        {!! Form::close() !!}
                        @include('errors.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection