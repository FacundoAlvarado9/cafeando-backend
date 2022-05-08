<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    @isset($currentCiudad)
    {{ucwords($currentCiudad->nombre)}}
    @endisset

    @empty($currentCiudad)
    Ciudad
    @endempty
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="{{ route('tostadurias.index').'?'.http_build_query(request()->except('presente-en', 'page')) }}">Todos</a></li>
      @foreach($ciudades as $ciudad)
      <li><a class="dropdown-item" href="{{ route('tostadurias.index').'?presente-en='.$ciudad->nombre.'&'.http_build_query(request()->except('presente-en', 'page')) }}">{{ $ciudad->nombre }}</a></li>
      @endforeach
  </ul>
</div>
