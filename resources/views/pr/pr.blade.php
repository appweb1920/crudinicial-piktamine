@extends('plantilla')
@section('seccionbody')

<h1>Puntos de recoleccion</h1><br>

<br>
<div class="jumbotron mx-auto" style="width:50%;">
<h2>Registrar punto:</h2>
<form action="{{ route('r-submitpr') }}" method="post">
    @csrf
        Direccion:<br><br>
        <input type="text" name="direccion" size='30'> <br><br>
        Tipo de basura: <br><br>
        <select name="tipo">
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
        <input type="time" name="ha"><br><br>
        
        Hora de cierre: <br><br>
        <input type="time" name="hc">
        
        <br><br><br>
        <button type="submit" class="btn btn-outline-primary">Registrar punto</button><br>
        
</form>
</div><br><br>


<div class="jumbotron mx-auto" style="width:50%;">
<h2>Asignar un recolector:</h2><br><br>

<form action="{{ route('r-submitrel') }}" method="post">
   @csrf
    Selecciona el recolector:
    <select name="rec">
       @foreach($rec as $r)
        <option value="{{$r->id}}">{{$r->nombre}}</option>
       @endforeach
    </select><br><br>
    Para la dirreccion: 
    <select name="pr">
        @foreach($datos as $pr)
        <option value="{{$pr->id}}">{{$pr->direccion}}</option>
       @endforeach
    </select>
    <br><br><br>
    <button type="submit" class="btn btn-outline-primary">Asignar punto</button>
    
</form>
</div><br><br>

<button class="btn btn-outline-secondary btn-sm" id="hide">Ocultar Datos</button>
<button class=" btn btn-outline-secondary btn-sm" id="show">Mostrar Datos</button>
<br><br>

<div id="tabla">
<h2>Datos:</h2><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Direccion</th>
      <th scope="col">Tipo de basura</th>
      <th scope="col">Hora de apertura</th>
      <th scope="col">Hora de cierre</th>
      <th scope="col">Editar/Eliminar</th>
    </tr>
  </thead>
  <tbody>
   @foreach($datos as $d)
        <tr>
          <th> {{$d->id}} </th>
          <td> {{$d->direccion}} </td>
          <td> {{$d->tipodebasura}} </td>
          <td> {{$d->horaapertura}} </td>
          <td> {{$d->horacierre}} </td>
          <td> <a href="/PuntosReciclaje/editar/{{ $d->id }}">
          <button class="btn btn-outline-warning"> 
          Editar 
          </button>
          </a> <a href="/PuntosReciclaje/elimina/{{ $d->id}}">
          <button class="btn btn-outline-danger">
          Borrar
          </button>
          </a> </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

<a href="{{ route('r-rec') }}">Recolectores - </a>
<a href="{{ route('r-det') }}">Recolectores con sus puntos de recoleccion</a><br>

@endsection