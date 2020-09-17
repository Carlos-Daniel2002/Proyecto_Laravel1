@extends('layouts.main')

@section('pageTitle', 'Índice de categorías')

@section('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">

@if (session('categories_stored'))
<div class="p-3 mb-2 bg-success text-white"><center>Categoría almacenada con éxito</center></div> 
@endif

@if (session('categories_destroyed'))
<center><div class="text-danger">Categoría eliminada con éxito</div></center>
@endif

<h1 class="text-light">Índice de  las categorías de pelicula</h1>
<p class="text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat ab quidem maxime? Corrupti, magni cum?</p>
<a href="{{ route('categories.create') }}"><button type="button" class="btn btn-dark">Crear una nueva Categoria</button></a><br><br>

<h2 class="p-3 mb-2 bg-dark text-white">Listado</h2>
@if (count($categories) == 0)
<p>No hay ninguna categoría creado por el momento</p>
@else
<ol class="list-decimal ml-8">
  @foreach($categories as $category)
  <li><a href="{{ route('categories.show', $category->id) }}" class="text-blue-500 hover:underline">{{ $category->name }}</a></li>
  @endforeach
</ol>
@endif
@endsection