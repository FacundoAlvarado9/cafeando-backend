<div>
  <label for="tipo_id" class="form-label">Tostaduria</label>
  <select class="" name="tostaduria_id">
    @foreach ($tostadurias as $tostaduria)
      <option value="{{ $tostaduria->id }}" {{ old('tostaduria_id') == $tostaduria->id ? 'selected' : '' }}> {{ucwords($tostaduria->nombre)}} </option>
    @endforeach
  </select>

</div>
