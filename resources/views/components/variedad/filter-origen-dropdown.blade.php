<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    @isset($currentOrigen)
    {{ucwords($currentOrigen->nombre)}}
    @endisset

    @empty($currentOrigen)
    Origenes
    @endempty
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="/variedades/?{{ http_build_query(request()->except('origen', 'page')) }}">Todos</a></li>
      @foreach($origenes as $origen)
      <li><a class="dropdown-item" href="/variedades/?origen={{ $origen->nombre }}&{{ http_build_query(request()->except('origen', 'page')) }}">{{ $origen->nombre }}</a></li>
      @endforeach
  </ul>
</div>