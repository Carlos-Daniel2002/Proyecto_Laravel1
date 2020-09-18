@extends('layouts.index')
@section ('content')
<body background="{{asset('imagenes/portada.jpg')}}">
    @if (count($movies)== 0)
            <br>
           <center><img src="{{asset('imagenes/no.jpg')}}" alt="" width="400xp" height="200px">
               <h1>Lo siento la pelicula no ha sido encontrada</h1>
                <p>Por favor intente colocando otro nombre de una pelicula diferente</p>
                <img src="{{asset('imagenes/emoji.jpg')}}" alt="" width="170xp" height="200px"></center>         
@endif
<br>
        <div class="row">
            @foreach ($movies as $value)
            <div class="col-2">
                <a href="{{ route('ShowMovie.show', $value->id) }}">
            <img src="{{ asset('storage/app/public/'.$value->image) }}" alt="Imagen" width="135px" height="250xp"> </a>
            </div>
            @endforeach
        </div>
            
  
@endsection