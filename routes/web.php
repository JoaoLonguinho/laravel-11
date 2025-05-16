<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
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
    // $post = Post::all();
    // $post = Post::where('title', 'LIKE', '%post%')->get(); traz a coleção, utilizando condição
    // // atualizando dados no banco:
    // $post = Post::find(1);
    // $post->title = "titulo atualizado";
    // $post->body = "meu novo text";
    // $post->save(); #comando necessário para atualizar no banco
    // $input = [
    //     'title' => 'texto via array',
    //     'body' => 'texto do body via array'
    // ];

    // $post = Post::find(1);
    // $post->fill($input);
    // $post = Post::find(1);
    // $post->delete();

    // dd($post);

    // $user = User::with('posts')->find(3);
    // // $user->profile()->create([
    // //     "type" => "PJ",
    // //     "document_number" => "19452956-9"
    // // ]);

    // $user->posts()->create([
    //     'title' => 'Meu primeiro post',
    //     'body' => 'Obrigado por ler meu primeiro post'
    // ]);

    $user = User::find(1);
    $user->roles()->attach(1);
    dd($user); #carrega relacao, com dados no banco

    return view('welcome');

});
Route::get('admin/usuarios', [UserController::class, "index"]); // Parametros : nome da controller e nome do metodo, que chama a listagem de usuários (pode ser qualquer nome)
Route::get('admin/usuarios/{user}', [UserController::class, "show"]); 