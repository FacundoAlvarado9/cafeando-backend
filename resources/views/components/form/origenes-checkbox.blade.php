<div class="border rounded" style="padding: 1em;">
  <label for="tipo_id" class="form-label"><b>Origen</b></label>

  <div class="overflow-auto" style="max-height: 7em;">
    @foreach ($origenes as $origen)
      <input type="checkbox" name="origenes[]" value="{{ $origen->id }}"> {{ $origen->nombre }} <br/>
    @endforeach
  </div>

  @error('origenes')
  <p class="error-message">{{ $message }}</p>
  @enderror
</div>
