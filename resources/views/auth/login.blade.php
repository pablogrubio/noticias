@extends('layouts.gestor')

@section('content')
<div class="container">
  <article id="login">
  <h1 class="verde">Login Administrador</h1>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <h2>INICIAR SESIÓN</h2>
      <p><i class="usuario"></i><input type="text" name="username" placeholder="Usuario" required></input></p>
      <p><i class="password"></i><input type="password" name="password" placeholder="Contraseña" required></input></p>
      <input type="submit" value="INICIAR SESIÓN" ></input>
    </form>
    </article>
</div>
@endsection
