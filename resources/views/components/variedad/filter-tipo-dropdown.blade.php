<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    @isset($currentTipo)
    {{ucwords($currentTipo->nombre)}}
    @endisset

    @empty($currentTipo)
    Tipo
    @endempty
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="/variedades/?{{ http_build_query(request()->except('tipo', 'page')) }}">Todos</a></li>
      @foreach($tipos as $tipo)
      <li><a class="dropdown-item" href="/variedades/?tipo={{ $tipo->nombre }}&{{ http_build_query(request()->except('tipo', 'page')) }}">{{ $tipo->nombre }}</a></li>
      @endforeach
  </ul>
</div>
