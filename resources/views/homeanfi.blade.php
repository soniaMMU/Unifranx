@extends('layouts.appanfi')

@section('content')
<style>
    body {
        background-color: #ffffeb;
    }
    .card {
        background-color: #feebd2;
        border: none;
        border-radius: 10px;
    }
    .card-header {
        background-color: #faad88;
        color: white;
        font-weight: bold;
    }
    .card-body {
        background-color: #fdd6ba;
        color: #333;
    }
    .alert-success {
        background-color: #fbc2a1;
        border: none;
        color: white;
    }
    .btn-custom {
        background-color: #faad88;
        color: white;
        border: none;
        border-radius: 5px;
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

                    <h1 class="text-center">ANFITRIÓN</h1>
                    <p class="text-center">{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
