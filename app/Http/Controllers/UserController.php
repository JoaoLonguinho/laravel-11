<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // Regras de negócio
        // Variáveis e conteúdos que vão para a view
        return view('users/index', [
            'greeting' => 'Hello World!',
            'users' => $users
        ]); //O ponto é a / do caminho
    }

    public function show(User $user)
    {
        // dd('x', $id); //dump - die 

        return view('users/show', [
            'user' => $user
        ]);
    }
}
