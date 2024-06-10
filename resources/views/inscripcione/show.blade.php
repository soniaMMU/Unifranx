@extends('layouts.app')

@section('template_title')
    {{ $inscripcione->name ?? __('Show') . " " . __('Inscripcione') }}
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
                            <span class="card-title">{{ __('Show') }} Inscripcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('inscripciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Participantes Id:</strong>
                                    {{ $inscripcione->participantes_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Eventos Id:</strong>
                                    {{ $inscripcione->eventos_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>St Ev:</strong>
                                    {{ $inscripcione->st_ev }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
