@extends("layout/plantilla")

@section("tituloPagina", "Actualizar un registro")

@section("contenido")

<div class="card">
    <h5 class="card-header"> Actualizar Nueva Tarea </h5>
    <div class="card-body">
        <p class="card-text">
        <form method="post" action="{{route('tareas.update', $tarea->id)}}">
            @csrf
            @method("PUT")
            <label for="">nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{$tarea->nombre}}"></input>
            </br>
            <a href="{{route('tareas.index')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-warning" style="margin-right: 20px;">Actualizar</button>
        </form>
        </p>
    </div>
    <div>
        @endsection