@extends('layouts.base')

@section('content')

<h2>Agregar un origen</h2>

<form class="" action="{{route('origenes.store')}}" method="post">
  @csrf

  <x-form.input nombre="nombre"/>
  <x-form.textarea nombre="descripcion">{{ old('descripcion') }}</x-form.textarea>

  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
