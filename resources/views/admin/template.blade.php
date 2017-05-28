<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title', 'Store | Admin') </title>
    <!--link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css" rel="stylesheet"-->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/flatly/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href=" {{ asset('admin/css/main.css') }} ">
</head>
<body>

        @if(\Session::has('message'))
            @include('admin.partials.message')
        @endif

        @include('admin.partials.nav')

        @yield('content')


        @include('admin.partials.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--script src="{{ asset('js/pinterest_grid.js') }}"></script-->
<script src=" {{ asset('admin/js/main.js') }} "></script>
</body>
</html>