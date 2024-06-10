@extends('layouts.appanfi')

@section('template_title')
    Inscripciones
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    
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
                                {{ __('Inscripciones') }}
                            </span>
                            <form action="{{ route('inscripcioneanfi.index') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control" placeholder="Buscar..." value="{{ $search ?? '' }}">
                                <button type="submit" class="btn btn-primary ml-2">
                                    <i class="fa-solid fa-magnifying-glass fa-sm" style="color: #FFD43B;"></i>
                                    </button>
                            </form>

                             <div class="float-right">
                                <a href="{{ route('inscripcioneanfi.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                                        
									<th >Participante</th>
									<th >Evento</th>
									<th >Estado Evento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscripciones as $inscripcione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td >{{ $inscripcione->participante->nom_p }} {{ $inscripcione->participante->app_p }} {{ $inscripcione->participante->apm_p }}</td>
                                            <td>{{ $inscripcione->evento->nom_ev }}</td>
										    <td >{{ $inscripcione->st_ev }}</td>

                                            <td>
                                                <form action="{{ route('inscripcioneanfi.destroy', $inscripcione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inscripcioneanfi.show', $inscripcione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inscripcioneanfi.edit', $inscripcione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
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
