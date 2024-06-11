@extends('layouts.appparticipante')

@section('title', 'Lista de Asistencias')

@section('content')
<style>
    * {
        
        color: aliceblue;
    }

</style>
    <h1>Lista de Asistencias</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Participante</th>
                <th>Fecha de Asistencia</th>
                <th>Estado de Asistencia</th>
                <th>Asistencia Confirmada</th>
                <th>Acciones</th> <!-- Columna para el botón -->
            </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\Asistencia::where('participantes_id', 3)->get() as $asistencia)
            <tr>
                <td>{{ $asistencia->participante->nom_p }} {{ $asistencia->participante->app_p }} {{ $asistencia->participante->apm_p }}</td>
                <td>{{ $asistencia->fh_asis }}</td>
                <td>{{ $asistencia->st_asis }}</td>
                <td>
                    @if ($asistencia->asistencia_confirmada == 1)
                        Asistencia Marcada
                    @else
                        No Marcada
                    @endif
                </td>
                <td>
                    @if ($asistencia->asistencia_confirmada != 1)
                        <a href="{{ route('asistenciapart.show', $asistencia->id) }}" class="btn btn-primary">Ver Detalles</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
