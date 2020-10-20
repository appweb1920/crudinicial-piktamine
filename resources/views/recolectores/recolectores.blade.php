@extends('plantilla')
@section('seccionbody')

<h1>Recolectores</h1><br>

<div class="jumbotron mx-auto" style="width:50%;">
<h3>Dar de alta:</h3><br>
<form action="{{ route('r-submit') }}" method="post">
    @csrf
        <b>Nombre:</b><br><br>
        <input type="text" name="nombre" size="25"> <br><br>
        <b>Dias de recoleccion:</b> <br><br>
        
        {{-- INICIO CHECKBOX --}}
        
        <input type="checkbox" id="lunes" name="lunes" value="lunes">
        <label for="lunes">Lunes</label><br>
        <input type="checkbox" id="martes" name="martes" value="martes">
        <label for="martes">Martes</label><br>
        <input type="checkbox" id="miercoles" name="miercoles" value="miercoles">
        <label for="miercoles">Miercoles</label><br>
        <input type="checkbox" id="jueves" name="jueves" value="jueves">
        <label for="jueves">Jueves</label><br>
        <input type="checkbox" id="viernes" name="viernes" value="viernes">
        <label for="viernes">Viernes</label><br>
        <input type="checkbox" id="sabado" name="sabado" value="sabado">
        <label for="sabado">Sabado</label><br>
        <input type="checkbox" id="domingo" name="domingo" value="domingo">
        <label for="domingo">Domingo</label><br><br>
        {{-- FIN CHECKBOX--}}
        
        <button type="submit" class="btn btn-outline-primary">Agregar recolector</button>
</form>
</div>
<br>

<button class="btn btn-outline-secondary btn-sm" id="hide">Ocultar Datos</button>
<button class=" btn btn-outline-secondary btn-sm" id="show">Mostrar Datos</button>
<br><br>
<div id="tabla">
<h3>Todos los recolectores:</h3><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Dias</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
   @foreach($datos as $d)
        <tr>
          <th> {{$d->id}} </th>
          <td> {{$d->nombre}} </td>
          <td>
          
            @if($d->lunes==1)
                lunes
                @endif
            @if($d->martes==1)
                martes
            @endif
            @if($d->miercoles==1)
                miercoles
            @endif
            @if($d->jueves==1)
                jueves
            @endif
            @if($d->viernes==1)
                viernes 
            @endif   
            @if($d->sabado==1)
                sabado
            @endif
            @if($d->domingo==1)
                domingo
            @endif
          </td>
          <td> <a href="/Recolectores/editar/{{ $d->id }}"> 
          <button class="btn btn-outline-warning">
          Editar
          </button>
          </a> <a href="/Recolectores/elimina/{{ $d->id}}">
          <button class="btn btn-outline-danger">
          Borrar
          </button>
          </a> </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

<a href="{{ route('r-pr') }}">Puntos de recoleccion - </a><br>
<a href="{{ route('r-det') }}">Recolectores con sus puntos de recoleccion</a>

@endsection