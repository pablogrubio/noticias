@extends('layouts.app')

@section('content')

<main id="ver-noticias">

<article class="nueva-noticia">

  <h2>{{$noticia->titular}}</h2>
     <div>
         <div>
            <h3>{{$noticia->subtitular}}</h3>
  {!! $noticia->cuerpo !!}
    </div>
         <div>

             </div>
    </div>
  </article>
</main>

@endsection
