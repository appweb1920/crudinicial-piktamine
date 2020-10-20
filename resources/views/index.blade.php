@extends('plantilla')
@section('seccionbody')

<style>
    .nav{
        width:60%;
        margin:auto;
    }
    .btn{
        height:70px;
        padding:0px;
        
    }
    .a{
        text-decoration:none;
    }
</style>

<h1>Recoleccion de basura</h1><br>

<div class="jumbotron mx-auto" style="width:50%;">

{{--
    <nav class="nav flex-column bg-white shadow-sm font-italic rounded p-4">
          <a href="{{ route('r-rec') }}"> <button type="button" class="btn btn-outline-primary">
              Recolectores </button>
          </a>
          <a href="#" class="nav-link px-4 rounded-pill">
                            <i class="fa fa-pie-chart mr-2"></i>
                            Puntos
                        </a>
          <a href="#" class="nav-link px-4 rounded-pill">
                            <i class="fa fa-pie-chart mr-2"></i>
                            3
                        </a>
        </nav>
--}}


<a href="{{ route('r-rec') }}"> 
<button type="button" class="btn btn-outline-primary btn-lg btn-block">
    Recolectores </button>
</a><br>
<a href="{{ route('r-pr') }}">
<button type="button" class="btn btn-outline-primary btn-lg btn-block">
Puntos de recoleccion
</button>
</a><br>
<a href="{{ route('r-det') }}">
<button type="button" class="btn btn-outline-primary btn-lg btn-block">
Recolectores y sus puntos de recoleccion
</button>
</a><br>

</div>
@endsection