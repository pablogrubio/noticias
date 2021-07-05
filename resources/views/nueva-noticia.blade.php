@extends('layouts.gestor')
@section('content')
<article id="noticias">
	<a href="{{route('gestor')}}">VOLVER</a>
	<h1>Nueva noticia</h1>
	<form action="{{route('guardar-noticia')}}" method="post" enctype="multipart/form-data" onsubmit="return check();">
		@csrf
		<ul>
			<li>
				<label> TITULAR</label>
				<input type="text" name="titular" required />
				<label>PUBLICAR NOTICIA</label>
				<select class="" name="estado">
					<option value="Si">Si</option>
					<option value="No">No</option>
				</select>
			</li>
			<li>
				<label>CUERPO NOTICIA</label>
				<input type="text" class="form-control" id="editor" name="cuerpo" />
			</li>
		</li>
	</ul>
		<input type="submit" value="SUBIR NOTICIA"></input>
		<input type="hidden" name="texto" id="texto" />
	</form>
</article>


@endsection
