<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Noticias</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/estilos.css?z3') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.min.css') }}?3" />
	<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
</head>

<body>
	<header>

		<nav>
			<ul>
				<li><a href="./">Noticias</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>
				<li><a href="{{ route('register') }}">Registro</a></li>
			</ul>

		</nav>

	</header>
	@yield('content')

</body>
</html>
