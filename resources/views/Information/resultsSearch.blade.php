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
<table>
    <tr>
@foreach ($movies as $value)
        <td class="bg-dark">
            <a href="{{ route('ShowMovie.show', $value->id) }}">
            <img src="{{ asset('storage/app/public/'.$value->image) }}" alt="Imagen" width="135px" height="250xp" >
            </a>
        </td>
    
@endforeach
    </tr>
</table>
@endsection