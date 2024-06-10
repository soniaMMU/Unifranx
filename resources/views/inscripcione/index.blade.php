@extends('layouts.app')

@section('template_title')
    Inscripciones
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
                                {{ __('Inscripciones') }}0
                            </span>
                            <form action="{{ route('inscripciones.index') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control" placeholder="Buscar..." value="{{ $search ?? '' }}">
                                <button type="submit" class="btn btn-primary ml-2">
                                    <i class="fa-solid fa-magnifying-glass fa-sm" style="color: #FFD43B;"></i>
                                    </button>
                            </form>
                            <div class="float-right">
                                
                                <a href="{{ route('inscripciones.create') }}" class="btn btn-primary btn-sm float-right ml-2"  data-placement="left">
                                  {{ __('REGISTRAR NUEVA INSCRIPCION') }}
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>PARTICIPANTE</th>
                                        <th>EVENTO</th>
                                        <th>ESTADO</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscripciones as $inscripcione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $inscripcione->participante->nom_p }} {{ $inscripcione->participante->app_p }} {{ $inscripcione->participante->apm_p }}</td>
                                            <td>{{ $inscripcione->evento->nom_ev }}</td>
                                            <td>{{ $inscripcione->st_ev }}</td>
                                            <td>
                                                <form action="{{ route('inscripciones.destroy', $inscripcione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('inscripciones.edit', $inscripcione->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $inscripciones->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
