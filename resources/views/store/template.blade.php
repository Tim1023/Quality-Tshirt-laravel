<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Aleks....">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> @yield('title', 'Store') </title>
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<link rel="icon" href="https://dcagency.co/sites/default/files/styles/thumbnail_x80_/public/laravel-four-icon%20copy.png?itok=6z9ADNTS">
	<link rel="stylesheet" href=" {{ asset('css/main.css') }} ">
</head>
<body>
	
	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif

	@include('store.partials.nav')
	
	@yield('content')
		<br><br>
	@include('store.partials.footer')


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src=" {{ asset('js/main.js') }} "></script>		
</body>
</html>