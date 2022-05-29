<div class="col">
  <label for="ciudad_cp" class="form-label">Ciudad</label>
  <select class="" name="ciudad_cp">
    @foreach ($ciudades as $ciudad)
      <option value="{{ $ciudad->cod_postal }}"
        @if(isset($sucursal) and !old('ciudad_cp'))
        {{ old('ciudad_cp', $sucursal->ciudad_cp) == $ciudad->cod_postal ? 'selected' : '' }}
        @else
        {{ old('ciudad_cp') == $ciudad->cod_postal ? 'selected' : '' }}
        @endif
        > {{ucwords($ciudad->nombre)}} </option>
    @endforeach
  </select>

  @error('ciudad_cp')
  <div class="alert alert-danger mt-1" role="alert">
    {{ $message }}
  </div>
  @enderror
</div>
