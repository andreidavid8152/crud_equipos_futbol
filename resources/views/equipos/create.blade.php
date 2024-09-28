@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Agregar Equipo de Fútbol</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del equipo</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" name="pais" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_fundacion">Fecha de Fundación</label>
            <input type="date" name="fecha_fundacion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estadio">Estadio</label>
            <input type="text" name="estadio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="entrenador">Entrenador</label>
            <input type="text" name="entrenador" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="liga">Liga</label>
            <input type="text" name="liga" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
