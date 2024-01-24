@extends('layouts.app')

@section('content')
    <!-- Encabezado -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Listado de Usuarios
            </h2>
        </div>
    </div>

    <!-- Agregar Usuario Button -->
    <div class="py-6 flex justify-center">
        <a href="{{ route('users.create') }}" class="text-blue-500 font-bold hover:text-blue-700">
            Agregar Usuario
        </a>
    </div>

    <!-- Listado de Usuarios -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="min-w-full mt-4 border">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b-2 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th class="px-6 py-3 border-b-2 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th class="px-6 py-3 border-b-2 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Modificar
                            </th>
                            <th class="px-6 py-3 border-b-2 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Eliminar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 border-b">
                                    {{ $user->name }}
                                </td>
                                <td class="px-6 py-4 border-b">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4 border-b">
                                    <!-- Botón Modificar -->
                                    <a href="{{ route('users.edit', $user->id) }}" class="text-green-500 font-bold hover:text-green-700">
                                        Modificar
                                    </a>
                                </td>
                                <td class="px-6 py-4 border-b">
                                    <!-- Botón Eliminar -->
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 font-bold hover:text-red-700">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
