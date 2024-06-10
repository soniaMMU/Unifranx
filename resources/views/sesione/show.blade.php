@extends('layouts.app')

@section('template_title')
    {{ $sesione->name ?? __('Show') . " " . __('Sesione') }}
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
                            <span class="card-title">{{ __('Show') }} Sesione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('sesiones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Eventos Id:</strong>
                                    {{ $sesione->eventos_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>T S:</strong>
                                    {{ $sesione->t_s }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cant S:</strong>
                                    {{ $sesione->cant_s }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>St S:</strong>
                                    {{ $sesione->st_s }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
