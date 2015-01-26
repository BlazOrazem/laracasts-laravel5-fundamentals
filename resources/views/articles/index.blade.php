@extends('master')

@section('content')

    <h1>Articles</h1>

    <hr>

    <a href="{{ action('ArticlesController@create') }}">Create new article &raquo;</a>

    <hr>

    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>
            </h2>

            <div class="body">
                <p>{{ $article->body }}</p>
                <p><a href="{{ url('/articles', [$article->id]) }}">Read more &raquo;</a></p>
            </div>
        </article>
    @endforeach

@stop