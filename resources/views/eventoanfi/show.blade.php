@extends('layouts.appanfi')

@section('template_title')
    {{ $evento->name ?? __('Show') . " " . __('Evento') }}
@endsection

@section('content')
<style>
    .card {
        background: #ffd9f4;
    }
    .card-header {
        background-color: #b27bee;
    }
</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('eventoanfi.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $evento->tip_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Inicio:</strong>
                                    {{ $evento->f_in_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $evento->nom_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sede:</strong>
                                    {{ $evento->sed_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Final:</strong>
                                    {{ $evento->f_fi_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $evento->st_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Imagen:</strong>
                                    {{ $evento->image }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
