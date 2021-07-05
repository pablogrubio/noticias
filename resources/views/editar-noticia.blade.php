@extends('layouts.gestor')
@section('content')
<article id="noticias">
	<a href="{{route('gestor')}}">VOLVER</a>
	<h1>Editar noticia</h1>
	<form action="{{route('actualizar-noticia',[$id])}}" method="post" enctype="multipart/form-data" onsubmit="return check();">
		@csrf
		<ul>
			<li>
				<label>TITULAR</label>
				<input type="text" name="titular" value="{{$noticia->titular}}" required />
				<label>PUBLICAR NOTICIA</label>
				<select class="" name="estado">
					<option value="Si">Si</option>
					<option value="No">No</option>
				</select>
			</li>
			<li>
				<label>CONTENIDO NOTICIA</label>
				<input type="text" name="cuerpo" value="{{$noticia->cuerpo}}"></input>
			</li>
		</ul>
		<input type="submit" value="MODIFICAR NOTICIA"></input>

	</form>
</article>

@endsection
