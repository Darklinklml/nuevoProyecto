<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
	<script type="text/javascript" src="{{mix('js/app.js')}}"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials._session-status')
		</header>

		<main>
			@yield('content')
			@yield('js')
		</main>

		<footer class="bg-white text-center text-black-60 py-3 shadow">
			{{config('app.name')}} | Desarrollado por Gerson Pérez
		</footer>
	</div>
	
	
</body>
</html>