@extends('layouts.base')

@section('content')

<h2>Editar una ciudad: {{ $ciudad->nombre }}</h2>

<form class="" action="{{route('ciudades.update', $ciudad->cod_postal)}}" method="post">
  @csrf
  @method('PATCH')

  <x-form.input nombre="nombre" :value="old('nombre', $ciudad->nombre)"/>
  <x-form.input nombre="cod_postal" label="Código Postal" :value="old('cod_postal', $ciudad->cod_postal)"/>

  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
