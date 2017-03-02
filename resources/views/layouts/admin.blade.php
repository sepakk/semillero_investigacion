<!DOCTYPE html>
<html>
<head>
	<title>
		Banco de Hojas de Vida - Universidad de Cundinamarca
	</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
					
</head>
<body>
	<div class="title">
		<img src="{{asset('image_logo.png')}}">
		@yield('contenido')
	</div>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>