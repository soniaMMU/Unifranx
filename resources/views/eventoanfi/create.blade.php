@extends('layouts.appanfi')

@section('template_title')
    {{ __('Create') }} Evento
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
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Evento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('eventoanfi.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('eventoanfi.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
