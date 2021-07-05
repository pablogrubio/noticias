@extends('layouts.app')

@section('content')
	<main id="home">

		<article class="noticias">
			<section>
				<h2 class="verde">Portal de Noticias</h2>
				<h3>Noticias de todos los usuarios</h3>
				@foreach ($noticias as $noticia)

				@if($noticia && $noticia->estado=='Si')
				<ul>
					<li>
						<div>
						<div>
						<h2>{{$noticia->titular}}</h2>
						{!!str_limit(strip_tags($noticia->cuerpo),400)!!}
						<a href="{{route('ver-noticia',[$noticia->id.'-'.str_slug($noticia->titular)])}}">IR A LA NOTICIA</a>
						</div>
						</div>
					</li>
				</ul>
				@endif
				@endforeach
			</section>
			<!--
			<section>
				<h2 class="verde">Feed</h2>
			</section>
		-->
		</article>

	</main>
@endsection
