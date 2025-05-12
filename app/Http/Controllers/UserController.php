<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return [
            "id" => 0,
            "nome" => "Joao"
        ];
    }

    public function show($id){
        // dd('x', $id); //dump - die 

        return $id;
    }
 }
