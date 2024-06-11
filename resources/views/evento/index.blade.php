@extends('layouts.app')

@section('template_title')
    Eventos
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
        <div class="titulo" align="center"> 
            <h2>EVENTOS REGISTRADOS</h2>
            <div class="float-right">
                <a href="{{ route('eventos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                  {{ __('REGISTRAR NUEVO EVENTO') }}
                </a>
                <a class="nav-link" href="{{ route('reporte.eventos') }}">
                    <i class='fas fa-file-alt' style='font-size:28px;color:white'></i> REPORTE DE EVENTOS
                </a>
            </div>
        </div>
        
        <div class="row">
            @foreach ($eventos as $evento)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div  class="card-head" align="center">
                            <br/>
                            <h5 class="card-title">{{ $evento->nom_ev }}</h5>
                        </div>
                        <div align="center">
                            <img src="{{ asset($evento->image) }}" class="card-img-top"  alt="..." style="width: 280px; height: 300px;" >
                        </div>

                        <div class="card-body">
                            
                            <p class="card-text">Tipo: {{ $evento->tip_ev }}</p>
                            <p class="card-text">Fecha Inicio: {{ $evento->f_in_ev }}</p>
                            <p class="card-text">Fecha Fin: {{ $evento->f_fi_ev }}</p>
                            <p class="card-text">Sede: {{ $evento->sed_ev }}</p>
                            <p class="card-text">Estado: {{ $evento->st_ev }}</p>
                        </div>
                        <div class="card-footer" align="center">
                            <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display: inline-block;">
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
