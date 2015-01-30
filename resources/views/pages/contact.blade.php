@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h1 class="panel-title pull-left" style="padding-top: 8px;">Contact me</h1>
                    </div>
                    <div class="panel-body">
                        <article>
                            <h2>You can contact me anytime on</h2>
                            <div class="body">
                                <ul class="list-group">
                                    <li class="list-group-item">E-mail: <a href="mailto:blaz@orazem.info">blaz@orazem.info</a></li>
                                    <li class="list-group-item">Website: <a href="http://www.orazem.info" target="_blank">www.orazem.info</a></li>
                                    <li class="list-group-item">Twitter: <a href="https://twitter.com/blazorazem" target="_blank">@blazorazem</a></li>
                                    <li class="list-group-item">GitHub: <a href="https://github.com/BlazOrazem" target="_blank">github.com/BlazOrazem</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>alert('Contact me on blaz@orazem.info or on Twitter @blazorazem! :)')</script>
@endsection