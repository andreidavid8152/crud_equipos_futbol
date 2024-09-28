@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Equipo</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $equipo->nombre }}</h2>
        </div>
        <div class="card-body">
            <p><strong>País:</strong> {{ $equipo->pais }}</p>
            <p><strong>Fecha de Fundación:</strong> {{ $equipo->fecha_fundacion }}</p>
            <p><strong>Estadio:</strong> {{ $equipo->estadio }}</p>
            <p><strong>Entrenador:</strong> {{ $equipo->entrenador }}</p>
            <p><strong>Liga:</strong> {{ $equipo->liga }}</p>
        </div>
    </div>

    <a href="{{ route('equipos.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection
