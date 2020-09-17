@extends('layouts.main')

@section('pageTitle', 'Página de inicio')

@section('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">

<a href="{{ route('homecreation') }}"><h3 class="text-black">M0V1E_F0R_A11</h3></a>
<h2 class="text-light">Bienvenidos</h2>
<p class="text-light">Bienvenidos a mi pagina web de peliculas</p>
<p class="text-light">Primeramente, quiero hacer este proyecto debido a que fue mi primera inspiración de trabajo cuando comenzaba a aprender programación, pero con el tiempo me fui dando cuenta que eso solo sería posible cuando manejara bien un lenguaje de programación y un framework que en este caso serían: PHP y Laravel.
Esta idea vino cuando yo buscaba en internet películas o enlaces para ver dichas películas, pero me fui dando cuenta de que costaba mucho tiempo encontrar las películas con su información y su enlace a la vez por esa razón tuve la idea de hacer un sitio web que contenga películas famosas con su respectiva información y su enlace para ver la película de modo gratuito.</p>


<h2 class="p-3 mb-2 bg-dark text-white">Accesos directos</h2>

<a href="{{ route('categories.create') }}">
    <button type="button" class="btn btn-dark">Crear una nueva Categoria</button>
</a>

<a href="{{ route('movies.create') }}">
    <button type="button" class="btn btn-dark">Crear una nueva pelicula</button>
</a>
<br><br>

@endsection
