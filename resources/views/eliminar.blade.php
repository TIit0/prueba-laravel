@extends("layout/plantilla")

@section("tituloPagina", "Eliminar un registro")

@section("contenido")

<div class="card">
    <h5 class="card-header"> Eliminar tarea </h5>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estas seguro de eliminar este registro? <span>{{$tarea->nombre}}</span>

            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Id</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$tarea->nombre}}</td>
                        <td>{{$tarea->id}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <form action="{{route('tareas.destroy', $tarea->id)}}" method="post">
            @csrf
            @method("DELETE")
            <a href="{{route('tareas.index')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-warning">Eliminar</button>
        </form>
        </p>
    </div>
    <div>
        @endsection