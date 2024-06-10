@extends('layouts.app')

@section('template_title')
    {{ $lugare->name ?? __('Show') . " " . __('Lugare') }}
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
                            <span class="card-title">{{ __('Show') }} Lugare</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('lugares.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Eventos Id:</strong>
                                    {{ $lugare->eventos_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom Lu:</strong>
                                    {{ $lugare->nom_lu }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Bl Lu:</strong>
                                    {{ $lugare->bl_lu }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cap Lu:</strong>
                                    {{ $lugare->cap_lu }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Est Lu:</strong>
                                    {{ $lugare->est_lu }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
