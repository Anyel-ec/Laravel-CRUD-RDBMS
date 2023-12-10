@extends('layout.principal')

@section('tituloPagina', 'Eliminar un nuevo registro')

@section('contenido')
    <h2>¿Está seguro de que desea eliminar este registro?</h2>
    <form action="{{ route('persona.destroy', $persona->id) }}" method="post">
        @csrf
        @method('DELETE') 
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control m-2"
               value="{{ $persona->nombre }}" placeholder="Nombre" required disabled>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" class="form-control m-2"
               value="{{ $persona->apellido }}" placeholder="Apellido" required disabled>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" class="form-control m-2"
               value="{{ $persona->telefono }}" placeholder="Teléfono" required disabled>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" class="form-control m-2"
               value="{{ $persona->direccion }}" placeholder="Dirección" required disabled>
        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nac" class="form-control m-2"
               value="{{ $persona->fecha_nac }}" placeholder="Fecha de Nacimiento" disabled>
        <a href="{{ route("persona.index") }}" class="btn btn-warning">Regresar</a>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection



