@extends('plantilla')
@section('seccionbody')

<h1>Puntos de recoleccion</h1><br>

<form action="#" method="post">
    @csrf
        Direccion:<br>
        <input type="text" name="nombre"> <br><br>
        Dias de recoleccion: <br>
        
        <input type="submit" value="Enviar">
</form>

@endsection