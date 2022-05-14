<div class="border rounded" style="padding: 1em;">
  <label for="origenes" class="form-label"><b>Origen</b></label>

  <div class="overflow-auto" style="max-height: 7em;">

    @foreach ($origenes as $origen)
      <input type="checkbox" name="origenes[]" value="{{ $origen->id }}"
      @if(((is_array(old('origenes')) and in_array($origen->id, old('origenes')))) or (isset($variedad) and (in_array($origen->id, $variedad->origenes->modelKeys()))) )
        checked
      @endif
      > {{ $origen->nombre }} <br/>
    @endforeach
  </div>

  @error('origenes', 'origenes.*')
  <p class="error-message">{{ $message }}</p>
  @enderror
</div>
