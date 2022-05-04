@props(['origen'])

<div class="card">
  <div class="card-body">
    <a href="{{ route('origenes.show', $origen->id) }}" class="card-title">{{ $origen->nombre }}</a>
    <p class="card-text">{{$origen->descripcion}}</p>
    <a href="#" class="btn btn-warning disabled">Editar</a>
    <a href="#" class="btn btn-danger disabled">Eliminar</a>
  </div>
</div>
