@extends('layouts.index')

@section('content')
<body background="{{asset('imagenes/12.jpg')}}">
  
@if (count($category) == 0)
<p>No encontramos resultados para tu búsqueca. Por favor, intenta con otros parámetros.<br>
@endif

<div class="d-flex justify-content-end">
    <div>Encontramos {{ $category->total() }} Pelicula(s) en total</div>
    @if ($category->hasPages())
      @if (!$category->onFirstPage())
      <div><a href="{{ $category->previousPageUrl() }}">(  ANTERIOR  )</a></div>
      @else
      <div> (  ANTERIOR  )</div>
      @endif
    <div>Página {{ "{$category->currentPage()} de {$category->lastPage()}" }}</div>
      @if ($category->hasMorePages())
      <div><a href="{{ $category->nextPageUrl() }}"> (  SIGUIENTE  )</a></div>
      @else
      <div>(  SIGUIENTE  )</div>
      @endif
    @endif
  </div>

    @foreach ($category as $item)
        <br>
        <p class="text-light"><strong>{{ $item->name}}</strong></p>
         <a href="{{ route('ShowMovie.show', $item->id) }}">
            <img src="{{asset('storage/app/public/'.$item->image)}}" alt="" width="200xp" height="400px" class="img-thumbnail">
        </a>
        <br>
        @endforeach

@endsection
