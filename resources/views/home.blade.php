@extends('layouts.app')

@section('content')

<div class="container">
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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <hr>
    <br>
    <br><br>
    <h1>Hola</h1>
    <form action="{{route('crear.token')}}" method="post">
        @csrf
        <input type="text" name="token_name" id="token_name">
        <input type="submit" value="Actualizar">
                        
</div>
@endsection
