@extends('layouts.base')

@section('content')

<h2>Editar variedad: {{ $variedad->nombre }}</h2>

<form class="" action="{{ route('variedades.update', $variedad->id) }}" method="post">
  @csrf
  @method('PATCH')

  <div class="container">
    <div class="row">
      <x-form.input nombre="nombre" :value="old('nombre', $variedad->nombre)"/>
    </div>

    <div class="row">
      <x-form.textarea nombre="descripcion">{{ old('descripcion', $variedad->descripcion) }}</x-form.textarea>
    </div>

    <div class="row">
      <x-form.input nombre="url" :value="old('url', $variedad->url)"/>
    </div>

    <div class="row">

      <div class="col-sm">
        <x-form.origenes-checkbox :variedad="$variedad"/>
      </div>


      <div class="col-sm">
        <x-form.tipo-dropdown :variedad="$variedad"/>
        <x-form.tostaduria-dropdown :variedad="$variedad"/>
      </div>


    </div>

    <x-form.error-displayer />

    <div class="row">
      <div class="col-lg-1">
        <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
      </div>

      <div class="col">
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>

    </div>

  </div>




</form>

@endsection
