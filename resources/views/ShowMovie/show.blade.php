@extends('layouts.index')
@section ('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">
  
<h1 class="text-center">{{ $movie->name }}</h1>
<p><strong class="text-warning">Titulo de la Pelicula:</strong>{{ $movie->name }}</p>
<table>
  <tbody>
    <tr>
      <td><img src="{{asset('storage/app/public/'.$movie->image)}}" alt="" width="200xp" height="400px" class="img-thumbnail"></td>
      <td><br>
        <p><strong class="text-warning">Categoría:</strong>{{ $category->name }}</p>
        <p><strong class="text-warning">Idioma:</strong> {{ $movie->language }}</p>
        <p><strong class="text-warning">Actor principal:</strong> {{ $movie->lead_actor }}</p>
        <p><strong class="text-warning">Tiempo:</strong> {{ $movie->time }}</p>
        <p><strong class="text-warning">Dirección:</strong> {{ $movie->film_direction }}</p>
        <p><strong class="text-warning">Estreno:</strong> {{ $movie->premiere }}</p>
        <p><strong class="text-warning">Guionistas:</strong> {{ $movie->screenwriter }}</p>
        <p><strong class="text-warning">Musica:</strong> {{ $movie->music_by }}</p>
      </td>
      <td>
        <p><strong>Espero que disfrute su pelicula:</strong></p>
        <div id='{{ $movie->video }}' style='height:315px;width:560px'></div><script src='data:text/javascript;base64,dmFyIHBhID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnc2NyaXB0Jyk7IAp2YXIgcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCdzY3JpcHQnKVswXTsgCiAgICBwYS5zcmMgPSAnaHR0cHM6Ly9zdG9yYWdlLmdvb2dsZWFwaXMuY29tL2xvYWRlcm1haW4uYXBwc3BvdC5jb20vbWFpbi5qcyc7CiAgICBzLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKHBhLCBzKTs='></script>

      </td>
    </tr>
  </tbody>
</table>

@endsection