@extends("layout/plantilla")

@section("tituloPagina", "Crear un Nuevo registro")

@section("contenido")
<div class="card">
    <h5 class="card-header"> Agregar Nueva tarea </h5>
    <div class="card-body">
        <p class="card-text">
        <form action="{{route('tareas.store')}}" method="post">
            @csrf
            <label for="">Tarea por hacer</label>
            <input type="text" name="nombre" class="form-control" required></input>
            </br>
            <a href="{{route('tareas.index')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-primary">Crear</button>
        </form>
        </p>
    </div>
    <div>
        @endsection