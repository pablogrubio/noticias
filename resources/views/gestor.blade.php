@extends('layouts.gestor')
@section('content')
<article id="gestor">
      <h1>Todas las noticias</h1>
      <a class="nueva-noticia" href="{{ route('nueva-noticia') }}" >Nueva noticia</a>

@foreach ($noticia as $not)
@if($not->usuario == $not->usuario=auth()->user()['id'])
    <hr>
  <section>

    <div class="texto-noticia">
    <p class="titular">{{$not->titular}}</p>
    <p class="subtitular">Noticia publicada: {{$not->estado}}</p>
    <p class="fecha">{{$not->created_at->format('d-m-Y')}}</p>

      </div>
    <ul>
      <li>
        <a href="{{route('ver-noticia',[$not->id])}}"><i class="icono vista"></i></a>
      </li>
      <li>
        <a onclick="return confirm('¿Desea borrar esta noticia?')"href="{{route('borrar-noticia',[$not->id])}}"><i class="icono borrar"></i></a>
        </li>
      <li>
        <a href="{{route('editar-noticia',[$not->id])}}"><i class="icono editar"></i></a>
      </li>
    </ul>
</section>
@endif

@endforeach

<hr>
</article>
@endsection
