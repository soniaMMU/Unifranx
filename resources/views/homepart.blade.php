@extends('layouts.appparticipante')

@section('content')
<style>
    body {
        background-color: #5e405b; /* color5 */
    }
    .card {
        background-color: #ffb752; /* color4 */
        border: none;
        border-radius: 10px;
        color: white;
    }
    .card-header {
        background-color: #ff5252; /* color1 */
        color: white;
        font-weight: bold;
        border-radius: 10px 10px 0 0;
    }
    .card-body {
        background-color: #ff9a52; /* color3 */
        color: #fff;
    }
    .alert-success {
        background-color: #ff7752; /* color2 */
        border: none;
        color: white;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">PARTICIPANTE</h1>
                    <p class="text-center">{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
