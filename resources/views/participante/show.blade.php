@extends('layouts.app')

@section('template_title')
    {{ $participante->name ?? __('Show') . " " . __('Participante') }}
@endsection

@section('content')
<style>
    body {
        background-color: #031c30; /* color1 */
        color: aliceblue;
    }
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
                            <span class="card-title">{{ __('Show') }} Participante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('participantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Rol del usuario en el sistema:</strong>
                            {{ $participante->role->rol }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $participante->nom_p }} {{ $participante->app_p }} {{ $participante->ci_p }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Cédula de Identidad:</strong>
                            {{ $participante->ci_p }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto de Referencia 1:</strong>
                            {{ $participante->c1_p }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto de Referencia 2:</strong>
                            {{ $participante->c2_p }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:</strong>
                            {{ $participante->corr_p }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $participante->carr_p }}
                        </div>
                        <div class="form-group">
                            <strong>Organización:</strong>
                            {{ $participante->org_p }}
                        </div>
                        <div class="form-group">
                            <strong>Estado del Usuario:</strong>
                            {{ $participante->est_p }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
