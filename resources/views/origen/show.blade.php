@extends('layouts.base')

@section('content')


<div class="container">
  <div class="row">

<div class="container">
  <div class="row">
    <div class="col">
      <h2>{{ $origen->nombre }}</h2>
    </div>
    <div class="col">
      <div class="row">
        <div class="col-2 col-md-3 col-lg-2">
          <x-boton-editar :rutaEdit="route('origenes.edit', $origen->id)" />
        </div>
        <div class="col-2 col-md-3 col-lg-2">
          <x-form.boton-eliminar :action="route('origenes.destroy', $origen->id)"/>
        </div>        
      </div>
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
