@extends('plantilla')
@section('seccionbody')

<h1>Puntos de recoleccion</h1><br>

<form action="{{ route('r-submit') }}" method="post">
    @csrf
        <b>Nombre:</b><br>
        <input type="text" name="nombre" value="{{$dato->nombre}}"> <br><br>
        <b>Dias de recoleccion:</b> <br><br>
        
        {{-- INICIO CHECKBOX --}}
        
        
        <input type="checkbox" id="lunes" name="lunes" value="lunes"
            @if($dato->lunes)
                checked="1"
            @endif >
        <label for="lunes">Lunes</label><br>
        <input type="checkbox" id="martes" name="martes" value="martes"
            @if($dato->martes)
                checked="1"
            @endif >
        <label for="martes">Martes</label><br>
        <input type="checkbox" id="miercoles" name="miercoles" value="miercoles"
            @if($dato->miercoles)
                checked="1"
            @endif >
        <label for="miercoles">Miercoles</label><br>
        <input type="checkbox" id="jueves" name="jueves" value="jueves"
            @if($dato->jueves)
                checked="1"
            @endif >
        <label for="jueves">Jueves</label><br>
        <input type="checkbox" id="viernes" name="viernes" value="viernes"
            @if($dato->viernes)
                checked="1"
            @endif >
        <label for="viernes">Viernes</label><br>
        <input type="checkbox" id="sabado" name="sabado" value="sabado"
            @if($dato->sabado)
                checked="1"
            @endif >
        <label for="sabado">Sabado</label><br>
        <input type="checkbox" id="domingo" name="domingo" value="domingo"
            @if($dato->domingo)
                checked="1"
            @endif >
        <label for="domingo">Domingo</label><br><br>
        {{-- FIN CHECKBOX--}}
        
        <input type="submit" value="Enviar">
</form>

@endsection