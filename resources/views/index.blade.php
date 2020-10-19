@extends('plantilla')
@section('seccionbody')

<h1>Recoleccion de basura</h1><br>

<div class="jumbotron mx-auto" style="width:50%;">

<a href="{{ route('r-rec') }}"> <button type="button" class="btn btn-outline-primary">
    Recolectores </button>
</a><br><br>
<a href="{{ route('r-pr') }}">
<button type="button" class="btn btn-outline-primary">
Puntos de recoleccion
</button>
</a><br><br>
<a href="{{ route('r-det') }}">
<button type="button" class="btn btn-outline-primary">
Recolectores y sus puntos de recoleccion
</button>
</a><br>

</div>
@endsection