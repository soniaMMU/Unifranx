@extends('layouts.appanfi')

@section('template_title')
    {{ __('Create') }} Recomendacione
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
                        <span class="card-title">{{ __('Create') }} Recomendacione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('recomendacioneanfi.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('recomendacioneanfi.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
