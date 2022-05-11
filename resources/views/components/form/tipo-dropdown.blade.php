<div class="col">
  <label for="tipo_id" class="form-label">Tipo</label>
  <select class="" name="tipo_id">
    @foreach ($tipos as $tipo)
      <option value="{{ $tipo->id }}" {{ old('tipo_id') == $tipo->id ? 'selected' : '' }}> {{ucwords($tipo->nombre)}} </option>
    @endforeach
  </select>
</div>
