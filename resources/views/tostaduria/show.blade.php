@extends('layouts.base')

@section('content')


<div class="container">
  <div class="row">
    <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/tostadurias">Tostadurias</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$tostaduria->nombre}}</li>
          </ol>
        </nav>
    </div>


<div class="container">
  <div class="row">
    <div class="col">
      <h2>{{ $tostaduria->nombre }}</h2>
    </div>
    <div class="col">
      <a href="#" class="btn btn-warning disabled">Editar</a>
      <a href="#" class="btn btn-danger disabled">Eliminar</a>
    </div>
  </div>

  <div class="row">

    <div class="col">
      <p>Sucursales</p>
    </div>

  </div>

  <div class="row">
    @foreach($tostaduria->sucursales as $sucursal)
    <x-sucursal.card :sucursal="$sucursal"/>
    @endforeach
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-info disabled" href="#" role="button">Agregar sucursal</a>
    </div>
  </div>

</div>

@endsection
