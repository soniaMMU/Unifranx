@extends('layouts.app')

@section('template_title')
    Sesiones
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
                                {{ __('Sesiones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sesiones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('REGISTRAR NUEVA SESION') }}
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
                                        
									<th >EVENTO</th>
									<th >NOMBRE DE LA SESION</th>
									<th >CANTIDAD DE INTEGRANTES EN LA SESION</th>

                                    <th>ESTADO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sesiones as $sesione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $sesione->evento->nom_ev }}</td>
										<td >{{ $sesione->t_s }}</td>
										<td >{{ $sesione->cant_s }}</td>
                                        <td >{{ $sesione->st_s }}</td>

                                            <td>
                                                <form action="{{ route('sesiones.destroy', $sesione->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('sesiones.edit', $sesione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
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
                {!! $sesiones->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
