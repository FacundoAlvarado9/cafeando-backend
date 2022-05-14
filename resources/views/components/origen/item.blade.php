@props(['origen'])

<div class="card">
  <div class="card-body">
    <a href="{{ route('origenes.show', $origen->id) }}" class="card-title">{{ $origen->nombre }}</a>
    <p class="card-text">{{$origen->descripcion}}</p>
    <div class="row">
      <div class="col-4 col-md-2 col-lg-1">
        <x-boton-editar :rutaEdit="route('origenes.edit', $origen->id)" />
      </div>
      <div class="col-4 col-md-2 col-lg-1">
        <x-form.boton-eliminar :action="route('origenes.destroy', $origen->id)"/>
      </div>
    </div>
  </div>
</div>
