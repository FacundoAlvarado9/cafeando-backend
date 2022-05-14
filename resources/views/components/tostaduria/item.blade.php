<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $tostaduria->nombre }}</h5>

    <div class="row">
      <div class="col-sm-3 col-md">
        <a href="{{ route('tostadurias.show', $tostaduria->id) }}" class="btn btn-primary">Ver sucursales</a>
      </div>

      <div class="col-sm-2 col-lg-1">
        <x-boton-editar rutaEdit="{{ route('tostadurias.edit', $tostaduria->id) }}" />
      </div>

      <div class="col-sm-3">
        <x-form.boton-eliminar :action="route('tostadurias.destroy', $tostaduria->id)" idModal="{{ $tostaduria->id }}" mensaje="Eliminarás la tostaduría y todas sus variedades asociadas"/>
      </div>
    </div>

  </div>
</div>
