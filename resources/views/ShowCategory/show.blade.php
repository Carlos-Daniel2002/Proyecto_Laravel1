@extends('layouts.index')

@section('content')
<body background="{{asset('imagenes/12.jpg')}}">
  
@if (count($category) == 0)
<p>No encontramos resultados para tu búsqueca. Por favor, intenta con otros parámetros.<br>
@endif

<div class="d-flex justify-content-end">
    <div class="p-3 mb-2 bg-success text-white">Encontramos {{ $category->total() }} Pelicula(s) en total</div>
    @if ($category->hasPages())
      @if (!$category->onFirstPage())
      <div class="p-3 mb-2 bg-light text-dark"><a href="{{ $category->previousPageUrl() }}">( --Anterior--  )</a></div>
      @else
      <div class="p-3 mb-2 bg-light text-dark"> ( --Anterior--  )</div>
      @endif
    <div class="p-3 mb-2 bg-success text-white">Página {{ "{$category->currentPage()} de {$category->lastPage()}" }}</div>
      @if ($category->hasMorePages())
      <div class="p-3 mb-2 bg-light text-dark"><a href="{{ $category->nextPageUrl() }}"> ( --Siguiente--  )</a></div>
      @else
      <div class="p-3 mb-2 bg-light text-dark">( --Siguiente--  )</div>
      @endif
    @endif
  </div>
<br><br>

    <div class="row">
      @foreach ($category as $item)
    <div class="col-2">
         <a href="{{ route('ShowMovie.show', $item->id) }}">
            <img src="{{asset('storage/app/public/'.$item->image)}}" alt="" width="200xp" height="400px" class="img-thumbnail"></a>
    </div>
        @endforeach
    </div>


@endsection
