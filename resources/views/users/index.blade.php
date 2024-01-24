<!-- resources/views/users/index.blade.php -->

@extends('layouts.app') <!-- Asegúrate de tener una plantilla base si estás utilizando blade -->

@section('content')
    <h1>Listado de Usuarios</h1>

    @foreach ($users as $user)
        <p>{{ $user->name }} {{ $user->apellido }} - {{ $user->email }}</p>
    @endforeach
@endsection

