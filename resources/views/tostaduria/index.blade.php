@extends('layouts.base')

@section('content')


<div class="container">
  <div class="row">
    
    <div class="col buscar ">
      <form action="" method="get">

        @if(request('presente-en'))
        <input type="hidden" name="presente-en" value="{{ request('presente-en') }}">
        @endif

        <input type="text" name="search" placeholder="Buscar" class="form-control" value="{{request('search')}}">
      </form>
    </div>

  </div>
</div>

  <x-status-message />


  <div class="row row-cols-auto">

    <div class="col">
      <a class="btn btn-info" href="{{ route('tostadurias.create') }}" role="button">Agregar tostaduria</a>
    </div>

    <div class="col">
      <x-tostaduria.filter-ciudad-dropdown/>
    </div>

    <div class="col">
      <a class="btn btn-primary" href="{{ route('tostadurias.index') }}" role="button">Resetear filtros</a>
    </div>

  </div>

<div class="row">
  <div class="accordion">
    @foreach($tostadurias as $tost)
    <x-tostaduria.item :tostaduria="$tost"/>
    @endforeach
  </div>
</div>

<div class="row">
  {{ $tostadurias->links() }}
</div>

</div>

@endsection
