<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ExercicioTresController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::with('info')->get();
        return view('exercicios.exercicio-tres', compact('usuarios'));
    }
}
