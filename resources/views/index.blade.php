@extends('plantilla')
@section('seccionbody')

<h1>Recoleccion de basura</h1><br>

<a href="{{ route('r-rec') }}">Recolectores</a><br>
<a href="{{ route('r-pr') }}">Puntos de recoleccion</a><br>
<a href="{{ route('r-det') }}">mostrar todos los datos</a><br>

@endsection