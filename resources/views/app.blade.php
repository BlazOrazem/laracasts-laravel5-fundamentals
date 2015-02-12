<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<!-- Bootstrap -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel='stylesheet'>

	<!-- Styles -->
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/all.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	@include('partials.nav')

	{{--
		//FlashMsgExample
		@include('partials.flash')
	--}}
	<div class="container-fluid">
		@include('flash::message')
	</div>

	@yield('content')

	<!-- Scripts -->
	<script src="/js/all.js"></script>

	@yield('footer')

	<script>
		//FlashMsgExample
		//$('div.alert').not('.alert-important').delay(3000).slideUp(300);
		$('#flash-overlay-modal').modal();
	</script>

</body>
</html>
