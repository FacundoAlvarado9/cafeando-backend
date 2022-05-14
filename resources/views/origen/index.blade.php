@extends('layouts.base')

@section('content')

<div class="container">
  <div class="row">

    <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Orígenes</li>
          </ol>
        </nav>
    </div>

    <div class="col buscar ">
      <form action="" method="get">
        <input type="text" name="search" placeholder="Buscar" class="form-control" value="{{request('search')}}">
      </form>
    </div>

  </div>

  <x-status-message />

  <div class="row">
    <div class="accordion">
      @foreach($origenes as $origen)
      <x-origen.item :origen="$origen"/>
      @endforeach
    </div>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-info" href="{{ route('origenes.create') }}" role="button">Agregar origen</a>
    </div>
  </div>

  <div class="row">
    {{ $origenes->links() }}
  </div>


</div>

@endsection
