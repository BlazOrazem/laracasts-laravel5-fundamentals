@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left" style="padding-top: 8px;">Articles</h1>
                        <a href="{{ action('ArticlesController@index') }}" class="btn btn-info pull-right">&laquo; Back to articles</a>
                    </div>
                    <div class="panel-body">
                        <article>
                            <div class="well well-sm clearfix">
                                <h2 class="pull-left">
                                    {{ $article->title }}
                                </h2>
                                <div class="pull-right">
                                    <a href="{{ action('ArticlesController@edit', [$article->id]) }}" class="btn btn-default btn-xs pull-left">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <span class="pull-left">&nbsp;</span>
                                    {!! Form::model($article, ['method' => 'DELETE', 'action' => ['ArticlesController@destroy', $article->id], 'class' => 'pull-right']) !!}
                                    {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', array('type' => 'submit', 'class' => 'btn btn-default btn-xs')) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <div class="body">
                                <p><em>Published at: {{ $article->published_at->format('d.m.Y, H:i') }}</em></p>
                                <hr>
                                <p>{{ $article->body }}</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection