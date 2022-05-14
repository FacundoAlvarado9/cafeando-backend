@extends('layouts.base')

@section('content')

<h2>Editar una Sucursal: {{$sucursal->direccion}}, {{$sucursal->ciudad->nombre}}</h2>
<form class="" action="{{route('sucursales.update', $sucursal->id)}}" method="post">
  @csrf
  @method('PATCH')

  <div class="container">
    <div class="row">
      <x-form.input nombre="direccion" :value="old('direccion', $sucursal->direccion)"/>
    </div>

    <div class="row">
      <div class="col-lg-2">
        <x-form.ciudad-dropdown :sucursal="$sucursal"/>
      </div>
      <div class="col-lg-2">
        <p>¿No encontrás la ciudad?</p>
      </div>
      <div class="col">
        <a href="#" class="btn btn-info">Agregar Ciudad</a>
      </div>
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
