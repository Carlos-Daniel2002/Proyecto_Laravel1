@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}" type="image/x-icon">
</head>
<body background="{{asset('imagenes/fondo1.jpg')}}">

@section('content')
<link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}" type="image/x-icon">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Gracias por registrate! Por favor entra a mi pagina web para más información ->') }}
                    <button type="button" class="btn btn-dark"><a href="{{ url('M0V1E_F0R_A11/menu') }}">Entrar</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
</body>
</html>