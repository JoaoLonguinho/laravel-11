<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{ 
    public function index(){
        return view('users.index'); //O ponto é a / do caminho
        // return [
        //     "id" => 0,
        //     "nome" => "Joao"
        // ];
    }

    public function show(User $user){
        // dd('x', $id); //dump - die 

        return $user;
    }
 }
