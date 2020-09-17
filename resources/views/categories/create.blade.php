@extends('layouts.main')

@section('pageTitle', 'Crear categoría')

@section('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">

<h1 class="text-light">Crear categorías</h1>
<p class="text-light">Completa correctamente el formulario para crear una nueva categoría</p>

<?php
if (session('error')) {
  echo '<p><strong>Por favor llenar correctamente el formulario de categorias de peliculas</strong></p>';
}
?>

<form action="{{ route('categories.store') }}" method="POST">
  @csrf

  <p class="text-light">Nombre de la categoría</p>
  <input type="text" name="name" value="<?php echo old('name') ?>" placeholder="Nombre de categoría" class="border">

  <p class="text-light">Descripción de la categoría</p>
  <textarea name="description" rows="5" class="border"><?php echo old('description') ?></textarea>
  
  <p><button class="btn btn-success">Guardar</button></p>
</form>
@endsection