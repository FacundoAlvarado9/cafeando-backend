<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    @isset($currentTostaduria)
    {{ucwords($currentTostaduria->nombre)}}
    @endisset

    @empty($currentTostaduria)
    Tostaduría
    @endempty
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="/variedades/?{{ http_build_query(request()->except('tostaduria', 'page')) }}">Todos</a></li>
      @foreach($tostadurias as $tost)
      <li><a class="dropdown-item" href="/variedades/?tostaduria={{ $tost->nombre }}&{{ http_build_query(request()->except('tostaduria', 'page')) }}">{{ $tost->nombre }}</a></li>
      @endforeach
  </ul>
</div>