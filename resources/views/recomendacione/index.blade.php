@extends('layouts.app')

@section('template_title')
    Recomendaciones
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Recomendaciones') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('recomendaciones.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('RECOMENDAR') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="row">
                            @foreach ($recomendaciones as $recomendacione)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-text" style="font-size: 2em;">{{ $recomendacione->desc_r }}</p>
                                            <h5 class="card-title" style="font-size: 0.75em;">{{ $recomendacione->participante->nom_p }} {{ $recomendacione->participante->app_p }} {{ $recomendacione->participante->apm_p }}</h5>
                                            <div class="text-center">
                                                <a href="{{ route('recomendaciones.edit', $recomendacione->id) }}" class="btn btn-success btn-sm"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                <form action="{{ route('recomendaciones.destroy', $recomendacione->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta recomendación?')"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {!! $recomendaciones->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
