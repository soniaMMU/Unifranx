@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Sesione
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
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Sesione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sesiones.update', $sesione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('sesione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
