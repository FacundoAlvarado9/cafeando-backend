<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $tostaduria->nombre }}</h5>

    <div class="row">
      <div class="col-sm-3 col-md">
        <a href="{{ route('tostadurias.show', $tostaduria->id) }}" class="btn btn-primary">Ver sucursales</a>
      </div>

      <div class="col-sm-2 col-lg-1">
        <a href="{{ route('tostadurias.edit', $tostaduria->id) }}" class="btn btn-warning">Editar</a>
      </div>

      <div class="col-sm-3">
        <form action="{{ route('tostadurias.destroy', $tostaduria->id) }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger">Eliminar</button>

        </form>
      </div>
    </div>

  </div>
</div>
