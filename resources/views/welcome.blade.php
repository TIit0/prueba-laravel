<!-- landing blade -->

@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')

<div class="card">
    <div class="card-header">
        <h5 class="card-title"> CRUD Con Laravel 8 </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                </div>
                @endif

            </div>
        </div>
        <h5 class="card-title"> Listado de tareas </h5>
        <p>
            <a href="{{route('tareas.create')}}" class="btn btn-primary">Agregar Nueva Tarea</a>
        </p>
        <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-small table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Id</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach ($datos as $tarea)

                    <tr>
                        <td>{{$tarea->nombre}}</td>
                        <td>{{$tarea->id}}</td>
                        <td>
                            <form action="{{route('tareas.edit', $tarea->id)}}" method="get">
                                <button class="btn btn-warning btn-small">
                                    Editar
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('tareas.show', $tarea->id)}}" method="get">
                                <button class="btn btn-danger btn-small">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>

        </div>
        </p>

    </div>
</div>
@endsection