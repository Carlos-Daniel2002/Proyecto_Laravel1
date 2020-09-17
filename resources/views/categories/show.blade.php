@extends('layouts.main')

@section('pageTitle', $category->name)

@section('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">

@if (session('categories_updated'))
<div class="p-3 mb-2 bg-success text-white">Categoría actualizada con éxito</div>
@endif

<h1 class="text-light">{{ $category->name }}</h1>
<p class="text-light"><strong>Descripción:</strong> {{ $category->description }}</p>
<p class="text-light"><strong>Creado el:</strong> {{ $category->created_at->formatLocalized('%b %d, %Y %I:%M %p') }}</p>

<p class="text-light"><a href="{{ route('categories.edit', $category->id) }}"><button class="btn btn-primary">Actualizar categoría</button></a></p>

  
<form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="mb-4" onsubmit="return confirm('¿Realmente quieres eliminar esta categoría?');">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger">Eliminar categoría</button>
</form>

@endsection
