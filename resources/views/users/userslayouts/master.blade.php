<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    

<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

	@include('users.userslayouts.header')
	@yield('content')
	@include('users.userslayouts.footer')

</body>
</html>
<script src="{{ asset('js/vendor-all.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pcoded.min.js') }}"></script>
