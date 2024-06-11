@extends('layouts.appparticipante')

@section('content')

<div class="container">
    <!-- Muestra el mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="list-group mb-4">
        <a href="{{ route('participante.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
            <i class="fas fa-users"></i> MIS TALLERES
        </a>
    </div>
    <h1 class="mt-4">Eventos Registrados</h1>
    <div class="row">
        @if($eventos->count())
            @foreach($eventos as $evento)
                <div class="col-md-4 mb-4">
                    <div class="card h-100" align="center">
                        @if($evento->image)
                        <img src="{{ asset($evento->image) }}" class="card-img-top"  alt="..." style="width: 280px; height: 300px;" >
                        @else
                        <img src="{{ asset($evento->image) }}" class="card-img-top"  alt="..." style="width: 280px; height: 300px;" >
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $evento->nom_ev }}</h5>
                            <p class="card-text"><strong>Tipo:</strong> {{ $evento->tip_ev }}</p>
                            <p class="card-text"><strong>Inicio:</strong> {{ $evento->f_in_ev }}</p>
                            <p class="card-text"><strong>Fin:</strong> {{ $evento->f_fi_ev }}</p>
                            <p class="card-text"><strong>Sede:</strong> {{ $evento->sed_ev }}</p>
                            <p class="card-text"><strong>Estado:</strong> {{ $evento->st_ev }}</p>
                            
                            <form action="{{ route('inscribirse.evento') }}" method="POST">
                                @csrf
                                <input type="hidden" name="evento_id" value="{{ $evento->id }}">
                                <button type="submit" class="btn btn-primary">Inscribirse a taller</button>
                            </form> 
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12 text-center">
                <p>No hay eventos registrados.</p>
            </div>
        @endif
    </div>
</div>
@endsection

@section('styles')
<style>
    .card {
        border: 1px solid #dee2e6;
        border-radius: .25rem;
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: 500;
    }
    .card-text {
        font-size: 1rem;
    }
    .card-img-top {
        width: 100%;
        height: auto;
    }
</style>
@endsection
