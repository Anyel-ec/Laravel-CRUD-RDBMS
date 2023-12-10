@extends('layout.principal')

@section('tituloPagina', 'Actualizar un nuevo registro')

@section('contenido')
    <h2>Actualizar registro</h2>
    <form action="{{ route('persona.update', $persona->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST') 
        @method('PUT') 
        <label for="">Nombre: </label>
        <input type="text" name="nombre" class="form-control m-2"
               value="{{ $persona->nombre }}" placeholder="Nombre" required>
        <label for="">Apellido: </label>
        <input type="text" name="apellido" class="form-control m-2"
               value="{{ $persona->apellido }}" placeholder="Apellido" required>
        <label for="">Telefono: </label>
        <input type="text" name="telefono" class="form-control m-2"
               value="{{ $persona->telefono }}" placeholder="Telefono" required>
        <label for="">Direccion: </label>
        <input type="text" name="direccion" class="form-control m-2"
               value="{{ $persona->direccion }}" placeholder="Direccion" required>
        <label for="">Fecha de Nacimiento: </label>
        <input type="date" name="fecha_nac" class="form-control m-2"
               value="{{ $persona->fecha_nac }}" placeholder="Fecha de Nacimiento">
        
        @if ($persona->foto)
            <img src="{{ asset('storage/' . $persona->foto) }}" alt="Imagen Actual" class="img-thumbnail m-2" style="max-width: 200px;">
        @endif
        <br>
        <label for="foto">Cambiar Foto:</label>
        <input type="file" name="foto" id="foto" class="form-control m-2" accept="image/*">

        <a href="{{ route('persona.index') }}" class="btn btn-warning">Regresar</a>
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
@endsection



