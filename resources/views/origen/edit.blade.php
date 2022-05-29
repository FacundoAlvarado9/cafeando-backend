@extends('layouts.base')

@section('content')

<h2>Editar origen: {{ $origen->nombre }}</h2>

<form class="" action="{{route('origenes.update', $origen->id)}}" method="post">
  @csrf
  @method('PATCH')

  <x-form.input nombre="nombre" :value="old('nombre', $origen->nombre)"/>
  <x-form.textarea nombre="descripcion">{{ old('descripcion', $origen->descripcion) }}</x-form.textarea>

  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
