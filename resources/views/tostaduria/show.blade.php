@extends('layouts.base')

@section('content')


<div class="container">
  <div class="row">

<x-status-message />


<div class="container">
  <div class="row">
    <div class="col">
      <h2>{{ $tostaduria->nombre }}</h2>
    </div>
    <div class="col">
      <div class="row">

        <div class="col-sm-4 col-md-2">
          <x-boton-editar rutaEdit="{{ route('tostadurias.edit', $tostaduria->id) }}" />
        </div>

        <div class="col-sm-4 col-md-2">
          <x-form.boton-eliminar :action="route('tostadurias.destroy', $tostaduria->id)" mensaje="Eliminarás la tostaduría y todas sus variedades asociadas"/>
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
    <x-sucursal.card :sucursal="$sucursal" tostaduria_id="$tostaduria->id"/>
    @endforeach
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-info" href="{{ route('tostadurias.sucursales.create', $tostaduria->id) }}" role="button">Agregar sucursal</a>
    </div>
  </div>

</div>

@endsection
