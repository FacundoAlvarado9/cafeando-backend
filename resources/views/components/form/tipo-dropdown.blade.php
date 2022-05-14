<div class="col">
  <label for="tipo_id" class="form-label">Tipo</label>
  <select class="" name="tipo_id">
    @foreach ($tipos as $tipo)
      <option value="{{ $tipo->id }}"

        @if(isset($variedad) and !old('tipo_id'))
        {{ $variedad->tipo->id == $tipo->id ? 'selected' : '' }}
        @else
        {{ old('tipo_id') == $tipo->id ? 'selected' : '' }}
        @endif
        
      > {{ucwords($tipo->nombre)}} </option>
    @endforeach
  </select>
</div>
