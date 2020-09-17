@extends('layouts.index')
@section ('content')
<body background="{{asset('imagenes/fondo1.jpg')}}">

<style>
body{ 
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
}
h5{ 
    color: #3633FF;
}
.perfil{
	border-image: black;
	width: 120px;
	height: auto;
	border-radius: 60px;
	border-color: black;
}
</style>
<br>
<br>
    <center><table><tr>
		<td><h1><center>Carlos Daniel<br>
    Torres Romero<br>
   <b><h5>Desarrollador Backend</h5></b></center></h1></td>
		<td><img src="{{asset('imagenes/perfil.jpg')}}" class="perfil"></td>
		</tr>
</table></center>
<hr color="white" width="50%">
<center>
    <table width="100%" border="0">
        <tr>
          <td>
            <br>
            <br>
          <h4>Datos personales</h4>
          <big>Fecha de nacimiento</big>
          <p>27 de agosto del 2002</p>
          <big>Correo Electronico</big>
          <p>maifrendaniel@gmail.com</p>
          <big>Numeros de Telefonos</big>
          <p>(7470-4022)(7561-1100)</p>
          <big>Dirección</big>
          <p>Sector la Lomita, Cantón Veracruz,<br>
            Municipio de Tonacatepeque</p>
          </td>
          <td>
          <h4>Certificados</h4>
          <p>Excel 2016 especialista</p>
          <p>Word 2016 especialista</p>
          <p>Toeic listening and Reading</p>
          <p>Toeic Speaking and</p>
          </td>
          <td>
          <h4>Habilidades</h4>
          <p>Liderazgo</p>
          <p>Capacidad para trabajar en equipo</p>
          <p>Solidaridad</p>
          <p>Responsabilidad</p>
          <p>Capacidad para resolver problemas</p>
          </td>
          <td>
          <h4>Quien soy</h4>
          <p>
            Soy una persona de buenos modales, con<br>
            excelentes aptitudes,responsable, dinámico,<br>
            muy entregado al trabajo y con deseos<br>
            de superarme cada vez más ya sea en el ámbito<br>
            laboral y a nivel personal.
          </p>
          </td>
        </tr>

    </table>
    </center>
  
      
    <style>
            html, body {
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 2;
            }

        </style>
@endsection