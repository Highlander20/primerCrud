@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')
<br><br>
<div class="card">
    <div class="card-header">
        CRUD RIGOBERTO
    </div>
    <div class="card-body">
        <h5 class="card-title">Listado de Personas en el Sistema</h5>
        <p>
            <a href="{{ route("personas.create") }}" class="btn btn-primary">Agregar nueva persona</a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-border">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->paterno}}</td>
                            <td>{{$item->materno}}</td>
                            <td>{{$item->fecha_nacimiento}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </p>
    </div>
@endsection