@extends('layout.principal')
@section('tituloPagina', 'CRUD')



@section('contenido')
<div class="row">
    <div class="col">
        <h4>Lab 3</h4>
   <h5>Listado de personas</h5>
   <p>
    <a href="{{route('persona.create')}}" class="btn btn-primary">Agregar Nueva Persona</a>
   </p>
 
       
  
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
            <form action="{{ route('persona.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
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