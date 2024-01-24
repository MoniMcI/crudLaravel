<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all(); // O cualquier lógica de recuperación que necesites
        return view('dashboard', compact('users'));
    }

    public function showRegistrationForm()
    {
        return view('dashboard.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id, 
            'phone_number' => 'required|string|max:20', 
            'password' => 'required|string|min:8',
        ]);

        // Crea un nuevo usuario
        $user = new User([
            'name' => $request->input('name'),
            'apellido' => $request->input('apellido'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Guarda el usuario en la base de datos
        $user->save();

        // Puedes redirigir a donde desees después del registro
        return redirect()->route('dashboard.index')->with('success', 'Usuario registrado exitosamente.');
    }    
}