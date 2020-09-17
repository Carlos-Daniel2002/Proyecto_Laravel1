<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section ('style')
    <link rel="stylesheet" href="{{asset('src/css/bootstrap.min.css')}}">
    @show
    <title>Página Informativa</title>
    <link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}" type="image/x-icon">
</head>

<div class="content">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo route('/menu') ?>">M0V1E_F0R_A11</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/welcome') ?>">Información del proyecto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/futuro') ?>">Futuro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/necesidad') ?>">Necesidad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/objetivo') ?>">Objetivo</a>
      </li>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo route('/contactanos') ?>">Contactame</a>
     </li>
     <div class="dropdown">
      <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" boder="btn btn-success">
        Categorias
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{ route('show.all', 1) }}">Acción</a>
        <a class="dropdown-item" href="{{ route('show.all', 2) }}">Comedia</a>
        <a class="dropdown-item" href="{{ route('show.all', 3) }}">Infantil</a>
        <a class="dropdown-item" href="{{ route('show.all', 4) }}">Superhéroe</a>
        <a class="dropdown-item" href="{{ route('show.all', 5) }}">Romance</a>
        <a class="dropdown-item" href="{{ route('show.all', 6) }}">Suspenso</a>
        <a class="dropdown-item" href="{{ route('show.all', 7) }}">Terror</a>
        <a class="dropdown-item" href="{{ route('show.all', 8) }}">Drama</a>
        <a class="dropdown-item" href="{{ route('show.all', 9) }}">Fantasía</a>
        <a class="dropdown-item" href="{{ route('show.all', 10) }}">Acción y Ciencia Ficción</a>
        <a class="dropdown-item" href="{{ route('show.all', 11) }}">Ciencia Ficción</a>
      </div>
    </div>
     <li class="nav-item">
      <a class="nav-link" href="<?php echo route('home') ?>">Salir</a>
     </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method='POST' >
    @csrf
      <input class="form-control mr-sm-2" type="search" placeholder="Busque la pelicula" aria-label="Search" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</div>


<style>
            html, body {
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 2;
            }

        </style>
<div class="container">
  
  @yield('content')
</div>
</body>
@section('scripts')
<script src="{{asset('src/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('src/js/popper.min.js')}}"></script>
<script src="{{asset('src/js/bootstrap.min.js')}}"></script>
@show
</html>
 



 

