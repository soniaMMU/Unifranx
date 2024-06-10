@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? __('Show') . " " . __('Evento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('eventos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tip Ev:</strong>
                                    {{ $evento->tip_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>F In Ev:</strong>
                                    {{ $evento->f_in_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom Ev:</strong>
                                    {{ $evento->nom_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sed Ev:</strong>
                                    {{ $evento->sed_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>F Fi Ev:</strong>
                                    {{ $evento->f_fi_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>St Ev:</strong>
                                    {{ $evento->st_ev }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Image:</strong>
                                    {{ $evento->image }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
