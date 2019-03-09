<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

	@include('inc.navbar')

	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>
	
	
	

</body>
</html>