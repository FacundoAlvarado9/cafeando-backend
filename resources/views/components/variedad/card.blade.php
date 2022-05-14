@props(['variedad'])

<div class="card" style="width: 18rem;">
    <img src="{{ $variedad->imagen }}" class="card-img-top" alt="...">
    <div class="card-body">
        <x-origen.clickable-badges :origenes="$variedad->origenes"/>
        <a class="card-title" href ="{{ route('variedades.show', $variedad->id) }}">{{ $variedad->nombre }}</a>
        <p><i>Tostador: <a href="{{ route('tostadurias.show', $variedad->tostaduria->id) }}">{{$variedad->tostaduria->nombre}}</a></i></p>
        <p class="card-text text-truncate">{{ $variedad->descripcion }}</p>

        <div class="row">
          <div class="col-4 col-md-4 col-lg-4">
            <x-boton-editar :rutaEdit="route('variedades.edit', $variedad->id)" />
          </div>
          <div class="col-4  col-md-4 col-lg-4">
            <x-form.boton-eliminar :action="route('variedades.destroy', $variedad->id)" idModal="{{$variedad->id}}"/>
          </div>
        </div>

    </div>
</div>
