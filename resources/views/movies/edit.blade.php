@extends('layouts.main')

@section('pageTitle', 'Crear pelicula')

@section('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">

<h1 class="text-light">Editar pelicula</h1>
<p class="text-light">Completa correctamente el formulario para actualizar la pelicula</p>

<form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="_method" value="PUT">

  <div class="form-row">
    <div class="col-7">
  <p class="text-light">Nombre de la pelicula</p>
  <input type="text" name="name" value="<?php echo old('name') ?>" placeholder="Nombre de pelicula" class="form-control">
  </div>

  <div class="col">
    <p class="text-light">Categorías de las peliculas</p>
    <select name="category_id" id="category_id" class="form-control">
      <option value="">(--Selecciona una categoría--)</option>
      @foreach ($categories as $category)
      <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="col">
  <p class="text-light">Idioma de la pelicula</p>
  <input type="text" name="language" value="<?php echo old('language') ?>" placeholder="Idioma" class="form-control">
  </div>

  <div class="col-7">
  <p class="text-light">Actor principal</p>
  <input type="text" name="lead_actor" value="<?php echo old('lead_actor') ?>" placeholder="Actor principal" class="form-control">
</div>

  <div class="col">
  <p class="text-light">Tiempo</p>
  <input type="time" name="time" value="<?php echo old('time') ?>" placeholder="Tiempo" class="form-control">
  </div>

  <div class="col">
  <p class="text-light">Dirección</p>
  <input type="text" name="film_direction" value="<?php echo old('film_direction') ?>" placeholder="Dirección" class="form-control">
  </div>

  <div class="col-7">
  <p class="text-light">Estreno</p>
  <input type="date" name="premiere" value="<?php echo old('premiere') ?>" placeholder="Estreno" class="form-control">
  </div>

  <div class="col">
  <p class="text-light">Guionista</p>
  <input type="text" name="screenwriter" value="<?php echo old('screenwriter') ?>" placeholder="Guionista" class="form-control">
  </div>

  <div class="col">
  <p class="text-light">Musica</p>
  <input type="text" name="music_by" value="<?php echo old('music_by') ?>" placeholder="Musica" class="form-control">
  </div>

  <div class="col-7">
  <p class="text-light">Video</p>
  <input type="text" name="video" value="<?php echo old('video') ?>" placeholder="Id del video" class="form-control">
  </div>

  <div class="col">
    <div class="form-group">
      <label for="exampleFormControlFile1" class="text-light">Seleccionar un archivo</label>
      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" accept="image/*">
    </div></div>

  <div class="col-7"><br>
  <p class="text-light"><button class="btn btn-primary">Actualizar</button></p>
  </div>
</form>
@endsection