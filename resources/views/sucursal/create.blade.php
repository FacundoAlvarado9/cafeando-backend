@extends('layouts.base')

@section('content')

<h2>Agregar una Sucursal</h2>
<form class="" action="{{route('tostadurias.sucursales.store', $tostaduria_id)}}" method="post">
  @csrf

  <div class="container">
    
    <div class="row">
      <div class="col-lg-2">
        <x-form.ciudad-dropdown/>
      </div>
    </div>

    <div class="row">
      <x-form.input nombre="direccion"/>
    </div>

    <x-form.error-displayer />

    <div class="row">
      <div class="col-lg-1">
        <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
      </div>

      <div class="col">
        <button type="submit" class="btn btn-primary">Agregar Sucursal</button>
      </div>

    </div>

  </div>




</form>

@endsection
