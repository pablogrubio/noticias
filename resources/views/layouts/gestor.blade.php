<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Gestor de noticias</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/gestor.css?z1') }}" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>

<body>
	<header>
		<nav>





</nav>

			<ul class="logout">

				<li><a href="./">Noticias</a></li>
				<li><a href="{{ route('logout') }}" id="logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span>CERRAR SESIÓN</span></a></li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST">
				    {{ csrf_field() }}
				</form>

			</ul>


	</header>

	@yield('content')


</body>
</html>
