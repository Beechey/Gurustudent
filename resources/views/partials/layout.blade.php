<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
	</head>
	<body>
		@include('partials.navigation')
		<div class="container">
			@include('partials.alerts')
			@yield('content')
		</div>
	</body>
</html>