@extends('layouts.main')

@section('pageTitle', 'Crear pelicula')

@section('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">

<h1 class="text-light">Crear Peliculas</h1>
<p class="text-light">Completa correctamente el formulario para crear una nueva pelicula</p>

<?php
if (session('error')) {
  echo '<p><strong>Por favor llenar correctamente el formulario de categorias de peliculas</strong></p>';
}
?>

<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <p class="text-light">Nombre de la pelicula</p>
  <input type="text" name="name" value="<?php echo old('name') ?>" placeholder="Nombre de pelicula" class="border">

  <div class="text-light">
    <p class="text-light">Categorías de las peliculas</p>
    <select name="category_id" id="category_id">
      <option value="">(--Selecciona una categoría--)</option>
      @foreach ($categories as $category)
      <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
      @endforeach
    </select>
  </div>

  <p class="text-light">Idioma de la pelicula</p>
  <input type="text" name="language" value="<?php echo old('language') ?>" placeholder="Idioma" class="border">
  
  <p class="text-light">Actor principal</p>
  <input type="text" name="lead_actor" value="<?php echo old('lead_actor') ?>" placeholder="Actor principal" class="border">
  
  <p class="text-light">Tiempo</p>
  <input type="time" name="time" value="<?php echo old('time') ?>" placeholder="Tiempo" class="border">

  <p class="text-light">Dirección</p>
  <input type="text" name="film_direction" value="<?php echo old('film_direction') ?>" placeholder="Dirección" class="border">
  
  <p class="text-light">Estreno</p>
  <input type="date" name="premiere" value="<?php echo old('premiere') ?>" placeholder="Estreno" class="border">

  <p class="text-light">Guionista</p>
  <input type="text" name="screenwriter" value="<?php echo old('screenwriter') ?>" placeholder="Guionista" class="border">
  
  <p class="text-light">Musica</p>
  <input type="text" name="music_by" value="<?php echo old('music_by') ?>" placeholder="Musica" class="border">

  <p class="text-light">Imagen</p>
  <input type="file" name="image" class="border" accept="image/*">

  <p class="text-light">Video</p>
  <input type="text" name="video" value="<?php echo old('video') ?>" placeholder="Id del video" class="border">
  <br><br>

  <p><button class="btn btn-success">Guardar</button></p>
</form>
@endsection