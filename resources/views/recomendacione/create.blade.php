@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Recomendacione
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
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Recomendacione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('recomendaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('recomendacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
