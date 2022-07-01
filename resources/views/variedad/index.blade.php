@extends('layouts.base')

@section('content')


<div class="container">
  <div class="row">

    <div class="col buscar ">
      <form action="" method="get">
        @if(request('origen'))
        <input type="hidden" name="origen" value="{{request('origen')}}">
        @endif

        @if(request('tostaduria'))
        <input type="hidden" name="tostaduria" value="{{request('tostaduria')}}">
        @endif

        @if(request('tipo'))
        <input type="hidden" name="tipo" value="{{request('tipo')}}">
        @endif
        <input type="text" name="search" placeholder="Buscar" class="form-control" value="{{request('search')}}">
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row row-cols-auto">

    <div class="col">
      <x-variedad.filter-tipo-dropdown/>
    </div>

    <div class="col">
      <x-variedad.filter-origen-dropdown/>
    </div>

    <div class="col">
      <x-variedad.filter-tostaduria-dropdown/>
    </div>

    <div class="col">
      <a class="btn btn-primary" href="{{ route('variedades.index') }}" role="button">Resetear filtros</a>
    </div>

  </div>
</div>



<div class="container">
    <div class="row">
        @foreach($variedades as $variedad)
        <x-variedad.card :variedad="$variedad"/>
        @endforeach
    </div>
</div>

<div class="row" style="margin-bottom: 1em;">
  <div class="col">
    <a class="btn btn-info" href="{{ route('variedades.create') }}" role="button">Agregar variedad</a>
  </div>
</div>

{{ $variedades->links() }}

@endsection
