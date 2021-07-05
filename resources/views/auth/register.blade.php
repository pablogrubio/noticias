@extends('layouts.gestor')

@section('content')
<div class="container">
<article id="login">
  <h1 class="verde">Registro de usuarios</h1>
          <form method="POST" action="{{ route('register') }}">
              @csrf
              <h2>Registrarme</h2>

                <p><i class="usuario"></i><input id="name" type="text" name="name" placeholder="Nombre" required ></input></p>
                <input class="separar" id="username" type="text" name="username" placeholder="Nombre de usuario" required>
                <input class="separar"id="email" type="email"  name="email" value="{{ old('email') }}" required placeholder="Email"></input></p>

                <p><i class="password"></i><input  id="password" type="password"  name="password" required  placeholder="Contraseña"></input></p>
                <input class="separar" id="password-confirm" type="password"   placeholder="Confirmar Contraseña" required></input>
                <input type="submit" value="REGISTRARME" ></input>
          </form>

        </article>
    </div>

@endsection
