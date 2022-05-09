@props(['nombre'])

<div class="mb-3">

  <label for="{{ $nombre }}" class="form-label">{{ ucwords($nombre) }}</label>
  <input type="text" name="{{ $nombre }}" placeholder="{{ ucwords($nombre) }}" class="form-control"  {{ $attributes(['value'=>old($nombre)]) }}">

  @error($nombre)
  <p class="error-message">{{ $message }}</p>
  @enderror

</div>
