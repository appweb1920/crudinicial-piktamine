@extends('plantilla')
@section('seccionbody')

<h1>Recoleccion de basura</h1><br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">id del Recolector</th>
      <th scope="col">Recolector</th>
      <th scope="col">id del Punto</th>
      <th scope="col">Punto de recoleccion</th>
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
        </tr>
    @endforeach
  </tbody>
</table>

<a href="{{ route('r-rec') }}">Recolectores</a>
<a href="{{ route('r-pr') }}">Puntos de recoleccion</a><br>

@endsection