@extends('layouts.appanfi')

@section('template_title')
    Asistencias
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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asistencias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asistencianfi.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									
                                        <th >Sesion</th>
                                        <th >Participante</th>
                                        <th >Fecha</th>
                                        <th >Estado</th>
                                        <th >Asistencia Confirmada</th>
									

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asistencias as $asistencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										
											<td >{{ $asistencia->sesione->t_s }}</td>
                                            <td>{{ $asistencia->participante->nom_p }} {{ $asistencia->participante->app_p }} {{ $asistencia->participante->apm_p }}</td>
										<td >{{ $asistencia->fh_asis }}</td>
										<td >{{ $asistencia->st_asis }}</td>
										<td>
                                            @if($asistencia->asistencia_confirmada == 1)
                                                CONFIRMADA
                                            @else
                                                NO CONFIRMADA
                                            @endif
                                        </td>

                                            <td>
                                                <form action="{{ route('asistencianfi.destroy', $asistencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asistencianfi.show', $asistencia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asistencianfi.edit', $asistencia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asistencias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
