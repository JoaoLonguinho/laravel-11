<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// verbo HTTP
Route::get('/', function () {

    // $post = Post::find(1); #Busca pelo id
    // $post = Post::where("title", "meu primeiro post")->first(); #busca utilizando where ->first tras o primeiro que bater com a condição
    // Para adicionar 'and' basta incluir ->where e para adicionar o 'or' basta adicionar o ->orWhere - qualquer coisa, verificar na documentação
    // busca por coleção de model:
    $post = Post::all();
    // $post = Post::where('title', 'LIKE', '%post%')->get(); traz a coleção, utilizando condição
    dd($post);
    return view('welcome');


});
Route::get('admin/usuarios', [UserController::class, "index"]); // Parametros : nome da controller e nome do metodo, que chama a listagem de usuários (pode ser qualquer nome)
Route::get('admin/usuarios/{user}', [UserController::class, "show"]); 