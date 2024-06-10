@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #031c30; /* color1 */
    }
    .card {
        background-color: #5a3546; /* color2 */
        border: none;
        border-radius: 10px;
        color: white;
    }
    .card-header {
        background-color: #b5485f; /* color3 */
        color: white;
        font-weight: bold;
        border-radius: 10px 10px 0 0;
    }
    .card-body {
        background-color: #fa8d3b; /* color5 */
        color: #fff;
    }
    .alert-success {
        background-color: #fc6747; /* color4 */
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

                    <h1 class="text-center">ADMINISTRADOR</h1>
                    <p class="text-center">{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
