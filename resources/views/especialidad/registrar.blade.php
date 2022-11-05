@extends('master')

@section('contenido')
    <h1>Registrar Alumno</h1><hr>
    <form action="{{ url('/especialidades/guardar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre de la especialidad:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        
        <div>
            <input type="submit" value="Registrar" class="btn btn-primary">
            <a href="{{ url('/especialidades') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop