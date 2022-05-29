@props(['nombre', 'type'=>'text'])

<div class="mb-3">

  <label for="{{ $nombre }}" class="form-label">{{ $attributes['label'] ?? ucwords($nombre) }}</label>
  <input type="{{ $type }}" name="{{ $nombre }}" placeholder="{{ $attributes['label'] ?? ucwords($nombre) }}" class="form-control"  {{ $attributes(['value'=>old($nombre)]) }}>

  @error($nombre)
  <div class="alert alert-danger mt-1" role="alert">
    {{ $message }}
  </div>
  @enderror

</div>
