@props(['nombre'])

<div class="mb-3">

  <label for="{{ $nombre }}" class="form-label">{{ ucwords($nombre) }}</label>
  <textarea type="text" name="{{ $nombre }}" placeholder="{{ ucwords($nombre) }}" class="form-control">{{ old($nombre) }}</textarea>

  @error($nombre)
  <div class="alert alert-danger mt-1" role="alert">
    {{ $message }}
  </div>
  @enderror

</div>
