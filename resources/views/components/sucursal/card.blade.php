@props(['sucursal'])

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <p>{{ $sucursal->direccion }}</p>
        <p><i>{{$sucursal->ciudad->nombre}}</i></p>
        <a href="#" class="btn btn-warning disabled">Editar</a>
        <a href="#" class="btn btn-danger disabled">Eliminar</a>
    </div>
</div>
