@extends('layouts.main')

@section('pageTitle', 'Página de inicio')

@section('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">

<h1 class="text-light">Editar categoría</h1>
<p class="text-light">Completa correctamente el formulario para actualizar la categoría</p>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="PUT">

  <p class="text-light">Nombre de la categoría</p>
  <input type="text" name="name" value="{{ $category->name }}" placeholder="Nombre de categoría" class="border">
  
  <p class="text-light">Descripción de la categoría</p>
  <textarea name="description" rows="5" class="border">{{ $category->description }}</textarea>
  
  <p><button class="btn btn-primary">Actualizar</button></p>
</form>
@endsection