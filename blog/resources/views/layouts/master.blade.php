<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blog - @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
	<script src="https://use.fontawesome.com/9d38ba3c3e.js"></script>
</head>
<body>		

	<div class="container">
		@yield('content')
	</div>

	<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>

</body>
</html>