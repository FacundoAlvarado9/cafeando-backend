@extends('layouts.base')

@section('content')


<div class="container">
  <div class="row">

    <div class="col">
      <a class="btn btn-info" href="{{ route('ciudades.create') }}" role="button">Agregar ciudad</a>
    </div>


    <div class="col buscar ">
      <form action="" method="get">

        <input type="text" name="search" placeholder="Buscar" class="form-control" value="{{request('search')}}">
      </form>
    </div>

  </div>
</div>

  <x-status-message />

<div class="row">
  <div class="accordion">
    @foreach($ciudades as $ciudad)
    <x-ciudad.item :ciudad="$ciudad"/>
    @endforeach
  </div>
</div>

<div class="row">
  {{ $ciudades->links() }}
</div>

</div>

@endsection
