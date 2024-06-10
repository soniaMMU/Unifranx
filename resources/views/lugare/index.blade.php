@extends('layouts.app')

@section('template_title')
    Lugares
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
                                {{ __('Lugares') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lugares.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
									<th >LUGAR</th>
									<th >BLOQUE</th>
									<th >CAPACIDAD</th>
									<th >ESTADO</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lugares as $lugare)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $lugare->evento->nom_ev }}</td>
										<td >{{ $lugare->nom_lu }}</td>
										<td >{{ $lugare->bl_lu }}</td>
										<td >{{ $lugare->cap_lu }}</td>
										<td >{{ $lugare->est_lu }}</td>

                                            <td>
                                                <form action="{{ route('lugares.destroy', $lugare->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('lugares.edit', $lugare->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $lugares->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
