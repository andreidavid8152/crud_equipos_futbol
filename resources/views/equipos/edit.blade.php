@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Editar Equipo de Fútbol</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre del equipo</label>
            <input type="text" name="nombre" class="form-control" value="{{ $equipo->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" name="pais" class="form-control" value="{{ $equipo->pais }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_fundacion">Fecha de Fundación</label>
            <input type="date" name="fecha_fundacion" class="form-control" value="{{ $equipo->fecha_fundacion }}" required>
        </div>
        <div class="form-group">
            <label for="estadio">Estadio</label>
            <input type="text" name="estadio" class="form-control" value="{{ $equipo->estadio }}" required>
        </div>
        <div class="form-group">
            <label for="entrenador">Entrenador</label>
            <input type="text" name="entrenador" class="form-control" value="{{ $equipo->entrenador }}" required>
        </div>
        <div class="form-group">
            <label for="liga">Liga</label>
            <input type="text" name="liga" class="form-control" value="{{ $equipo->liga }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
