@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tablero</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent">Usuarios</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Modulo de usuarios</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ route('usuarios.index') }}" class="btn btn-primary btn-lg btn-block">Ir a todos los usuarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
