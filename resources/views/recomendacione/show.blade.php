@extends('layouts.app')

@section('template_title')
    {{ $recomendacione->name ?? __('Show') . " " . __('Recomendacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recomendacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('recomendaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Participantes Id:</strong>
                                    {{ $recomendacione->participantes_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Desc R:</strong>
                                    {{ $recomendacione->desc_r }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
