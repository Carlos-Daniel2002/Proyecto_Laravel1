@extends('layouts.main')

@section('pageTitle', $movie->name)

@section('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">
  
@if (session('movies_updated'))
<center><div class="p-3 mb-2 bg-success text-white">Pelicula actualizada con éxito</div></center>
@endif
<h1 class="text-light">{{ $movie->name }}</h1>
<p class="text-light"><strong class="text-warning">Titulo de la Pelicula:</strong>{{ $movie->name }}</p>
<table>
  <tbody>
    <tr>
      <td><img src="{{asset('storage/app/public/'.$movie->image)}}" alt="" width="200xp" height="400px" class="img-thumbnail"></td>
      <td><br>
        <p class="text-light"><strong class="text-warning">Categoría:</strong>{{ $category->name }}</p>
        <p class="text-light"><strong class="text-warning">Idioma:</strong> {{ $movie->language }}</p>
        <p class="text-light"><strong class="text-warning">Actor principal:</strong> {{ $movie->lead_actor }}</p>
        <p class="text-light"><strong class="text-warning">Tiempo:</strong> {{ $movie->time }}</p>
        <p class="text-light"><strong class="text-warning">Dirección:</strong> {{ $movie->film_direction }}</p>
        <p class="text-light"><strong class="text-warning">Estreno:</strong> {{ $movie->premiere }}</p>
        <p class="text-light"><strong class="text-warning">Guionistas:</strong> {{ $movie->screenwriter }}</p>
        <p class="text-light"><strong class="text-warning">Musica:</strong> {{ $movie->music_by }}</p>
      </td>
      <td>
        <p class="text-light"><strong>Espero que disfrute su pelicula:</strong></p>
        <div id='{{ $movie->video }}' style='height:315px;width:560px'></div><script src='data:text/javascript;base64,dmFyIHBhID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnc2NyaXB0Jyk7IAp2YXIgcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCdzY3JpcHQnKVswXTsgCiAgICBwYS5zcmMgPSAnaHR0cHM6Ly9zdG9yYWdlLmdvb2dsZWFwaXMuY29tL2xvYWRlcm1haW4uYXBwc3BvdC5jb20vbWFpbi5qcyc7CiAgICBzLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKHBhLCBzKTs='></script>

      </td>
    </tr>
  </tbody>
</table>

<p class="text-light"><a href="{{ route('movies.edit', $movie->id) }}"><button class="btn btn-primary">Actualizar Pelicula</button></p><br>

<form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="mb-4" onsubmit="return confirm('¿Realmente quieres eliminar esta Pelicula?');">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger">Eliminar pelicula</button>
</form>

@endsection