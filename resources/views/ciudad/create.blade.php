@extends('layouts.base')

@section('content')

<h2>Agregar una ciudad: </h2>

<form class="" action="{{route('ciudades.store')}}" method="post">
  @csrf

  <x-form.input nombre="nombre"/>
  <x-form.input nombre="cod_postal" label="Código Postal"/>

  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
