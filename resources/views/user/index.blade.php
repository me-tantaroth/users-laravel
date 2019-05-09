@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="clearfix mb-3">
                <a href="{{ route('usuarios.create') }}" class="float-right btn btn-primary">Crear Usuario</a>
            </div>
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                    <ul class="list-group">
                    @foreach($users as $user)
                        <li class="list-group-item">
                            <h3>{{ $user->name }}</h3>
                            <div class="clearfix">
                                <div class="float-right pl-1">
                                    <a href="{{ route('usuarios.edit', ['id' => $user->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                                </div>
                                <div class="float-right pl-1">
                                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="post" onSubmit="return confirm('Esta seguro de eliminar el usuario {{ $user->name }}? ')">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
