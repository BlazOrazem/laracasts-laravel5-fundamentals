@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left" style="padding-top: 8px;">About Me: {{ $first }} {{ $last }}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="jumbotron">
                            <h2>My Favourite Quote From Samuel L. Jackson</h2>
                            <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                        </div>
                        <hr>
                        @if(count($people))
                            <article>
                                <h2>
                                    People I Like
                                </h2>
                                <div class="body">
                                    <ul class="list-group">
                                        @foreach($people as $person)
                                            <li class="list-group-item">{{ $person }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </article>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection