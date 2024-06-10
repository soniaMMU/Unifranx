@extends('layouts.appanfi')

@section('template_title')
    Sesiones
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
                                {{ __('Sesiones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sesioneanfi.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
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
                                        
									<th >Evento</th>
									<th >Titulo</th>
									<th >Cantidad</th>
                                    <th >St S</th>

                                        <th></th>
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
                                                <form action="{{ route('sesioneanfi.destroy', $sesione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sesioneanfi.show', $sesione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sesioneanfi.edit', $sesione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $sesiones->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
