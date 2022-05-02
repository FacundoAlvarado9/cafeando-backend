@props(['origenes'])

<div>
    @foreach ($origenes as $origen)
    <span class="badge bg-{{ strtolower($origen->nombre) }}"><a href="/origenes/1" style="color: white;">{{ $origen->nombre }}</a></span>
    @endforeach
</div>