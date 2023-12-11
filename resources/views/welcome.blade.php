@extends('layout.principal')
@section('tituloPagina', 'CRUD')
<<<<<<< HEAD
=======

<<<<<<< HEAD


=======
>>>>>>> c59921791c8de331781c600d88d0b4f1215afe5b
>>>>>>> 9ef35377d7b015e35684bc2e99b43f20a50cde51
@section('contenido')
<div class="row">
    <div class="col">
        <h4>Lab 3</h4>
   <h5>Listado de personas</h5>
   <p>
    <a href="{{route('persona.create')}}" class="btn btn-primary">Agregar Nueva Persona</a>
   </p>
<<<<<<< HEAD
=======
<<<<<<< HEAD
 
       
  
=======
>>>>>>> c59921791c8de331781c600d88d0b4f1215afe5b
>>>>>>> 9ef35377d7b015e35684bc2e99b43f20a50cde51
   <div class="table-responsive">
    <table class="table table-sm">
        <thead>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Fecha Nacimiento</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
<tbody>
    @foreach ($datos as $item)
    <tr>
        <td>{{$item->nombre. " ". $item->apellido}}</td>
        <td>{{$item->telefono}}</td>
        <td>{{$item->direccion}}</td>
        <td>{{$item->fecha_nac}}</td>
        <td>
            <form action="{{route('persona.edit', $item->id)}}" method="POST">
                @csrf
                <button class="btn btn-warning btn-sm">
                    <span class="fas fa-user-edit"> </span>
                </button>
            </form>
        </td>
        <td>
<<<<<<< HEAD
            {{-- /**
             * Form for deleting a record.
             *
             * This form is used to delete a record by sending a DELETE request to the specified route.
             * It includes a confirmation prompt to ensure the user wants to proceed with the deletion.
             *
             * string $route The route to send the DELETE request to.
             * int $item->id The ID of the record to be deleted.
             */ --}}
            <form action="{{ route('persona.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" 
                onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
=======
            <form action="{{ route('persona.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
>>>>>>> 9ef35377d7b015e35684bc2e99b43f20a50cde51
                    <span class="fas fa-user-times"> </span>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
    </table>
   </div>
  
    </div>
   
</div>
@endsection