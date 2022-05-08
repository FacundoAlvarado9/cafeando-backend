@extends('layouts.base')

@section('content')


<div class="container">
  <div class="row">
    <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('origenes.index') }}">Orígenes</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$origen->nombre}}</li>
          </ol>
        </nav>
    </div>


<div class="container">
  <div class="row">
    <div class="col">
      <h2>{{ $origen->nombre }}</h2>
    </div>
    <div class="col">
      <a href="#" class="btn btn-warning disabled">Editar</a>
      <a href="#" class="btn btn-danger disabled">Eliminar</a>
    </div>
  </div>

  <div class="row">
    <p>{{ $origen->descripcion }}</p>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="{{ url()->previous() }}" role="button">Volver</a>
    </div>
  </div>
</div>

@endsection
