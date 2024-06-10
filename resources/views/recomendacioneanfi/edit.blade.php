@extends('layouts.appanfi')

@section('template_title')
    {{ __('Update') }} Recomendacione
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
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Recomendacione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('recomendacioneanfi.update', $recomendacione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('recomendacioneanfi.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
