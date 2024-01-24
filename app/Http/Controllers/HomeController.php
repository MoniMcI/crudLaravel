<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Muestra la página principal con el formulario de inicio de sesión o registro.
     */
    public function index()
    {
        return view('home');
    }
}
