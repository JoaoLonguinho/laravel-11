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
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'avatar' => 'file'
        ]);
        // User::create($input);
        // dd($request->all());
        if(!empty($input["avatar"]) && $input["avatar"]->isValid()){
            $input["avatar"]->store('avatars');
        }
        
        return redirect()->back();
    }
    public function show(User $user)
    {
        // dd('x', $id); //dump - die 

        return view('users/show', [
            'user' => $user
        ]);
    }
}
