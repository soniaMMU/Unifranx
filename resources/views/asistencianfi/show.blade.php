@extends('layouts.appanfi')

@section('template_title')
    {{ $asistencia->name ?? __('Show') . " " . __('Asistencia') }}
@endsection

@section('content')
<style>
    
    .card{
        background: #ffdabf;
    }
    .card-header {
        background-color: #ffbf91;
      
    }

</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asistencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('asistencianfi.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Sesion:</strong>
                            {{  $asistencia->sesione->t_s }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Participante:</strong>
                            {{ $asistencia->participante->nom_p}}
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
