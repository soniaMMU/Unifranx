@extends('layouts.app')

@section('template_title')
    {{ $asistencia->name ?? __('Show') . " " . __('Asistencia') }}
@endsection
<style>
    body {
        background-color: #031c30; /* color1 */
        color: aliceblue;
    }
</style>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asistencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('asistencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Sesiones Id:</strong>
                                    {{ $asistencia->sesiones_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Participantes Id:</strong>
                                    {{ $asistencia->participantes_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fh Asis:</strong>
                                    {{ $asistencia->fh_asis }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>St Asis:</strong>
                                    {{ $asistencia->st_asis }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Asistencia Confirmada:</strong>
                                    {{ $asistencia->asistencia_confirmada }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
