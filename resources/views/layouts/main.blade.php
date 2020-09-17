<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>M0V1E_F0R_A11 | @yield('pageTitle', 'Bienvenidos')</title>
    <link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}" type="image/x-icon">
    <link href="{{ asset('src/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
    <div class="container">
      <div class="d-flex flex-row-reverse">
        <div class="p-2"><a href="{{ route('categories.index') }}" class="text-primary"><button class="btn btn-outline-primary">Categorias</button></a></div> 
        <div class="p-2"><a href="{{ route('movies.index') }}" class="text-primary"><button class="btn btn-outline-primary">Peliculas</button></a></div>
        <div class="p-2"><a href="{{ route('homecreation') }}" class="text-primary"><button class="btn btn-outline-primary">Home</button></a></div> 
        <div class="p-2"><a href="{{ route('home') }}" class="text-primary"><button class="btn btn-outline-primary">UserHome</button> </a></div>
      </div>

      @section('content')
      <p>Este es un mensaje de ejemplo</p>
      @show

      <div class="text-light">{{ date('Y') }} Derechos Reservados Por Carlos Daniel</div>
      <img src="{{ asset('imagenes/rollo.png') }}" alt="">
      <img src="{{ asset('imagenes/deco.jpg') }}" alt="" width="300xp">


      @section('scripts')
      @show
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
      flatpickr("#complete_date", { enableTime: true, minDate: 'today' });
    </script>
  </body>
</html>