<!-- resources/views/misinscripciones/mis_inscripciones.blade.php -->

@extends('layouts.appparticipante')

@section('content')
<style>
    * {
        
        color: aliceblue;
    }

</style>
<div class="container">
    <h1 class="mt-4">Mis Talleres Inscritos</h1>
    @if($inscripciones->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre del Participante</th>
                    <th>Nombre del Taller</th>
                    <th>Tipo</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Sede</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inscripciones as $inscripcion)
                    <tr>
                        <td>{{ $inscripcion->participante->nom_p }} {{ $inscripcion->participante->app_p }} {{ $inscripcion->participante->apm_p }}</td> <!-- Muestra el nombre completo del participante -->
                        <td>{{ $inscripcion->evento->nom_ev }}</td>
                        <td>{{ $inscripcion->evento->tip_ev }}</td>
                        <td>{{ $inscripcion->evento->f_in_ev }}</td>
                        <td>{{ $inscripcion->evento->f_fi_ev }}</td>
                        <td>{{ $inscripcion->evento->sed_ev }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="text-center">
            <p>No estás inscrito en ningún taller.</p>
        </div>
    @endif
</div>
@endsection

@section('styles')
<style>
    .table {
        width: 100%;
        margin: 20px 0;
    }
</style>
@endsection
