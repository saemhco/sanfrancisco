@extends('plantilla.usuario')
@section('titulo','Dahsboard')
@section('activacion')
@endsection
@section('estilos')
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR|Russo+One|Lobster" rel="stylesheet">
@endsection
@section('contenido')
<h1 style="text-align: center; font-size: 10em; font-family: 'Russo One', sans-serif;">SAR </h1>
<div align='center'>
	<img src="{{url('plantilla/images/gallery/logo.jpg')}}" align="center" height="200px;">
</div>
<p style="text-align: center; font-size: 3em;">Sistema de Análisis de Riesgos
</p><hr>
<br><br><h3 style="text-align: right; font-family: 'Lobster', cursive; text-align: left;margin-left: 60%;">José Valdivia Jaimes<br>Kathering Ingunza Lastra</h3>



@endsection
@section('script')

@endsection