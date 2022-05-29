@extends('layouts.base')

@section('content')

<h2>Agregar una tostaduria</h2>

<form class="" action="{{route('tostadurias.store')}}" method="post">
  @csrf

  <x-form.input nombre="nombre"/>

  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>

@endsection
