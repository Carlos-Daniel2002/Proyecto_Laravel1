@extends('layouts.main')

@section('pageTitle', 'Índice de peliculas')

@section('content')
<body background="{{asset('imagenes/12.jpg')}}">

@if (session('movies_stored'))
<div class="p-3 mb-2 bg-success text-white">Pelicula almacenada con éxito</div>
@endif

@if (session('movies_destroyed'))
<div class="p-3 mb-2 bg-danger text-white">Pelicula eliminada con éxito</div>
@endif

<h1 class="text-light">Índice de  las peliculas</h1>
<h4 class="text-light">en esta vista es donde almaceno todas mis peliculas de forma ordenada</h4>
<a href="{{ route('movies.create') }}"><button type="button" class="btn btn-dark">Crear una nueva Pelicula</button></a><br><br>

<h2 class="text-light">Listado</h2>
@if (count($movies) == 0)
<p>No hay ninguna pelicula creado por el momento</p>
@else
<ol class="text-light">
  @foreach($movies as $movie)
  <li><a href="{{ route('movies.show', $movie->id) }}" class="text-primary"><img src="{{asset('storage/app/public/'.$movie->image)}}" alt="" width="150xp" height="300px" class="img-thumbnail"></a></li>
  @endforeach
</ol>
@endif

@endsection