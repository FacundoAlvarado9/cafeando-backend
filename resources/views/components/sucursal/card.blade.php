@props(['sucursal'])

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <p>{{ $sucursal->direccion }}</p>
        <p><i>{{$sucursal->ciudad->nombre}}</i></p>
        <x-boton-editar rutaEdit="{{ route('sucursales.edit', $sucursal->id)}}" />
        <x-form.boton-eliminar action="{{ route('sucursales.destroy', $sucursal->id) }}" idModal="{{ $sucursal->id }}"/>
    </div>
</div>
