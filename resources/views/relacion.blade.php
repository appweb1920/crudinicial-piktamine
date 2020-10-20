@extends('plantilla')
@section('seccionbody')

<h1>Recoleccion de basura</h1><br>

<button class="btn btn-outline-secondary btn-sm" id="hide">Ocultar Datos</button>
<button class=" btn btn-outline-secondary btn-sm" id="show">Mostrar Datos</button>
<br><br>

<div id="tabla">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">id del Recolector</th>
      <th scope="col">Recolector</th>
      <th scope="col">id del Punto</th>
      <th scope="col">Punto de recoleccion</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
   @foreach($datos as $d)
        <tr>
          <th> {{$d->id}} </th>
          <td> {{$d->idrec}} </td> 
          <td> 
          @foreach($rec as $r)
          @if($r->id==$d->idrec)
              {{ $r->nombre }}  
          @endif
          @endforeach 
          </td> 
          <td> {{$d->idpr}} </td>
          <td> 
          @foreach($pr as $p)
          @if($p->id==$d->idpr)
              {{ $p->direccion }} 
          @endif
          @endforeach
          </td>
          <td>
            <a href="/DetallesRelaciones/eliminar/{{ $d->id}}">
          <button class="btn btn-outline-danger">
          Borrar
          </button>
          </a>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

<a href="{{ route('r-rec') }}">Recolectores - </a>
<a href="{{ route('r-pr') }}">Puntos de recoleccion</a><br>

@endsection