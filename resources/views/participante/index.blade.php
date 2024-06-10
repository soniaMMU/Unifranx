@extends('layouts.app')

@section('template_title')
    Participantes
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
                                {{ __('Participantes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('participantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('REGISTRAR NUEVO PARTICIPANTE') }}
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
                                        
									<th >ROL</th>
									<th >USUARIO</th>
									<th >CI</th>
									<th >CONTACTOS</th>
									<th >CORREO</th>
									<th >CARRERA</th>
									<th >ORGANIZACION</th>
									<th >ESTADO</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($participantes as $participante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $participante->role->rol }}</td>
										<td >{{ $participante->nom_p }} {{ $participante->app_p }} {{ $participante->apm_p }}</td>
										
										<td >{{ $participante->ci_p }}</td>
										<td >
                                            <div>
                                                {{ $participante->c1_p }}
                                            </div>
                                            <div>
                                                {{ $participante->c2_p }}
                                            </div>
                                        </td>
										<td >{{ $participante->corr_p }}</td>
										<td >{{ $participante->carr_p }}</td>
										<td >{{ $participante->org_p }}</td>
										<td >{{ $participante->est_p }}</td>

                                            <td>
                                                <form action="{{ route('participantes.destroy', $participante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('participantes.show', $participante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('participantes.edit', $participante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Está seguro de eliminarlo?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $participantes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
