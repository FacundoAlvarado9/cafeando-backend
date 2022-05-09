@extends('layouts.base')

@section('content')


<div class="container">
  <div class="row">
    <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('tostadurias.index') }}">Tostadurias</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$tostaduria->nombre}}</li>
          </ol>
        </nav>
    </div>

<x-status-message />


<div class="container">
  <div class="row">
    <div class="col">
      <h2>{{ $tostaduria->nombre }}</h2>
    </div>
    <div class="col">
      <div class="row">

        <div class="col-sm-4 col-md-2">
          <a href="{{ route('tostadurias.edit', $tostaduria->id) }}" class="btn btn-warning">Editar</a>
        </div>

        <div class="col-sm-4 col-md-2">
          <form action="{{ route('tostadurias.destroy', $tostaduria->id) }}" method="post">
              @csrf
              @method('DELETE')

              <button class="btn btn-danger">Eliminar</button>

          </form>
        </div>

      </div>

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
