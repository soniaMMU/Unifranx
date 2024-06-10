@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? __('Show') . " " . __('Horario') }}
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
                            <span class="card-title">{{ __('Show') }} Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('horarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugares Id:</strong>
                                    {{ $horario->lugares_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dia Ho:</strong>
                                    {{ $horario->dia_ho }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>H In:</strong>
                                    {{ $horario->h_in }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>H Fin:</strong>
                                    {{ $horario->h_fin }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
