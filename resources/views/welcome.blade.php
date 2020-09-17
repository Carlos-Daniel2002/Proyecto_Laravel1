<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section ('style')
    <link rel="stylesheet" href="{{asset('src/css/bootstrap.min.css')}}">
    @show
    <title>Bienvenidos</title>
    <link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}" type="image/x-icon">
    </head>

    <body background="{{asset('imagenes/fondo1.jpg')}}">
    <style>
            html, body {
                background-color: #fff;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <button type="button" class="btn btn-dark"><a href="{{ url('/home') }}">Home</a></button>
                        
                    @else
                    <button type="button" class="btn btn-dark"><a href="{{ route('login') }}">Iniciar sesión</a></button>

                        @if (Route::has('register'))
                        <button type="button" class="btn btn-dark"><a href="{{ route('register') }}">Registrate</a></button>

                        @endif
                    @endauth
                </div>
            @endif

   <center><h1>Bienvenidos a todos, a mi pagina web de peliculas, por favor registrarse para conocer más de ella</h1></center> 
   <br>
  <center>><img src="{{asset('imagenes/cine.jpg')}}" alt="" width="35%"></center
    </body>
    @section('scripts')
<script src="{{asset('src/js/bootstrap.min.css')}}"></script>
@show
</html>
