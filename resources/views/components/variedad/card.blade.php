@props(['variedad'])

<div class="card" style="width: 18rem;">
    <img src="{{ $variedad->external_img_url }}" class="card-img-top" alt="...">
    <div class="card-body">
        <x-origen.clickable-badges :origenes="$variedad->origenes"/>
        <a class="card-title" href ="{{ route('variedades.show', $variedad->id) }}">{{ $variedad->nombre }}</a>
        <p><i>Tostador: <a href="{{ route('tostadurias.show', $variedad->tostaduria->id) }}">{{$variedad->tostaduria->nombre}}</a></i></p>
        <p class="card-text text-truncate">{{ $variedad->descripcion }}</p>
        <!-- <a href="/variedades/{{$variedad->id}}" class="btn btn-primary">Más Información</a> -->
        <a href="#" class="btn btn-warning disabled">Editar</a>
        <a href="#" class="btn btn-danger disabled">Eliminar</a>
    </div>
</div>
