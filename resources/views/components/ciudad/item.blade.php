<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $ciudad->nombre }}</h5>

    <div class="row">
      <div class="col-sm-2 col-lg-1">
        <x-boton-editar rutaEdit="{{ route('ciudades.edit', $ciudad->cod_postal) }}" />
      </div>

      <div class="col-sm-3">
        <x-form.boton-eliminar :action="route('ciudades.destroy', $ciudad->cod_postal)" mensaje="Eliminarás la ciudad y todas sus sucursales asociadas"/>
      </div>
    </div>

  </div>
</div>
