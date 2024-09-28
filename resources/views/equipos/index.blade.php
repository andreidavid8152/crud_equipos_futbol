@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Equipos de Fútbol</h1>
    <a href="{{ route('equipos.create') }}" class="mb-2 btn btn-primary">Agregar Equipo</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>País</th>
                <th>Fecha de Fundación</th>
                <th>Estadio</th>
                <th>Entrenador</th>
                <th>Liga</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->nombre }}</td>
                <td>{{ $equipo->pais }}</td>
                <td>{{ $equipo->fecha_fundacion }}</td>
                <td>{{ $equipo->estadio }}</td>
                <td>{{ $equipo->entrenador }}</td>
                <td>{{ $equipo->liga }}</td>
                <td>
                    <a href="{{ route('equipos.edit', $equipo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
