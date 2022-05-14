@props(['action'])

<form action="{{ $action }}" method="post">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger">Eliminar</button>

</form>
