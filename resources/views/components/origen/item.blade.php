@props(['origen'])

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $origen->nombre }}</h5>
    <p class="card-text">{{$origen->descripcion}}</p>
    <a href="#" class="btn btn-warning disabled">Editar</a>
    <a href="#" class="btn btn-danger disabled">Eliminar</a>
  </div>
</div>
