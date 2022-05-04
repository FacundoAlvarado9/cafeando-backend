@props(['origenes'])

<div>
    @foreach ($origenes as $origen)
    <span class="badge bg-{{ strtolower($origen->nombre) }}"><a href="{{ route('origenes.show', $origen->id) }}" style="color: white;">{{ $origen->nombre }}</a></span>
    @endforeach
</div>
