@extends('plantilla')
@section('seccionbody')

<h1>Puntos de recoleccion</h1><br>

<div class="jumbotron mt-3">
<form action="{{ route('r-guardarpr') }}" method="post">
    @csrf
        <b>Descripcion:</b><br><br>
        <input type="hidden" name="id" value="{{$dato->id}}">
        <input type="text" name="direccion" value="{{$dato->direccion}}"> <br><br>
        <b>Tipo de basura:</b> <br><br>
        <select name="tipo">
            <option selected value="{{ $dato->tipodebasura }}">{{ $dato->tipodebasura }}</option>
            <option value="Organica">Organica</option>
            <option value="Metales">Metales</option>
            <option value="Papel y carton">Papel y carton</option>
            <option value="Escombro">Escombro</option>
            <option value="Plastico">Plastico</option>
            <option value="Residuos Toxicos">Residuos Toxicos</option>
            <option value="Reciduos Sanitarios">Reciduos Sanitarios</option>
            <option value="Basura Tecnologica">Basura Tecnologica</option>
            <option value="Basura vegetal">Basura vegetal</option>
            <option value="Otro">Otro</option>
        </select><br><br>
        
        Hora de Apertura: <br><br>
        <input type="time" name="ha" value="{{ $dato->horaapertura }}"><br><br>
        
        Hora de cierre: <br><br>
        <input type="time" name="hc" value="{{ $dato->horacierre }}">
        
        <br><br><br>
        
        <input type="submit" value="Terminar edicion">
</form>
</div>
@endsection