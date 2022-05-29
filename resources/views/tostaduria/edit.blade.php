@extends('layouts.base')

@section('content')

<h2>Editar tostaduría: {{ $tostaduria->nombre }}</h2>

<form class="" action="{{route('tostadurias.update', $tostaduria->id)}}" method="post">
  @csrf
  @method('PATCH')

  <x-form.input nombre="nombre" :value="old('nombre', $tostaduria->nombre)"/>

  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
