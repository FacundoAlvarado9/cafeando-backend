<div>
  <label for="tipo_id" class="form-label">Tostaduria</label>
  <select class="" name="tostaduria_id">

    @foreach ($tostadurias as $tostaduria)
      <option value="{{ $tostaduria->id }}"

        @if(isset($variedad) and !old('tostaduria_id'))
        {{ $variedad->tostaduria->id == $tostaduria->id ? 'selected' : '' }}
        @else
        {{ old('tostaduria_id') == $tostaduria->id ? 'selected' : '' }}
        @endif

      > {{ucwords($tostaduria->nombre)}} </option>
    @endforeach

  </select>

</div>
