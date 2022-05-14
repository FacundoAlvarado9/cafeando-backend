@extends('layouts.base')

@section('content')

<h2>Agregar una variedad</h2>

<form class="" action="{{route('variedades.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  <div class="container">
    <div class="row">
      <x-form.input nombre="nombre"/>
    </div>

    <div class="row">
      <x-form.textarea nombre="descripcion">{{ old('descripcion') }}</x-form.textarea>
    </div>

    <div class="row mb-3">
      <x-form.input nombre="imagen" type="file" />

    </div>

    <div class="row">
      <x-form.input nombre="url"/>
    </div>

    <div class="row">

      <div class="col-sm">
        <x-form.origenes-checkbox />
      </div>


      <div class="col-sm">
        <x-form.tipo-dropdown />
        <x-form.tostaduria-dropdown/>
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
