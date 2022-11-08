<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExercicioUmRequest;
use App\Http\Services\UserService;
use App\Events\UserCadastradoEvent;

class ExercicioUmController extends Controller
{
    private UserService $UsuarioService;

    public function __construct()
    {
      $this->UserService = new UserService();
    }

    public function index()
    {
        return view('exercicios.exercicio-um');
    }

    public function store(ExercicioUmRequest $request)
    {
        $usuario = $this->UserService->store($request->name,$request->userName,$request->zipCode,$request->email,$request->password);

        // Dispara o evento de usuário cadastrado para poder extender a classe futuramente
        event(new UserCadastradoEvent($usuario));


        return redirect()->route('index')->with('success', 'Usuário cadastrado com sucesso!');
    }

}
