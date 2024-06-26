@extends('layouts.appanfi')

@section('template_title')
    Eventos
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
<div class="container-fluid">
    <div class="titulo" align="center"> 
        <h2>EVENTOS REGISTRADOS</h2>
    </div>
    <div class="float-right">
        <a href="{{ route('eventoanfi.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
            {{ __('Crear Nuevo') }}
        </a>
    </div>
    <div class="row">
        @foreach ($eventos as $evento)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header" align="center">
                    <br/>
                    <h5 class="card-title">{{ $evento->nom_ev }}</h5>
                </div>
                <div align="center">
                    <img src="{{ asset($evento->image) }}" class="card-img-top" alt="..." style="width: 280px; height: 300px;">
                </div>

                <div class="card-body">
                    <p class="card-text">Tipo: {{ $evento->tip_ev }}</p>
                    <p class="card-text">Fecha Inicio: {{ $evento->f_in_ev }}</p>
                    <p class="card-text">Fecha Fin: {{ $evento->f_fi_ev }}</p>
                    <p class="card-text">Sede: {{ $evento->sed_ev }}</p>
                    <p class="card-text">Estado: {{ $evento->st_ev }}</p>
                </div>
                <div class="card-footer" align="center">
                    <a href="{{ route('eventoanfi.edit', $evento->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('eventoanfi.destroy', $evento->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este evento?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
