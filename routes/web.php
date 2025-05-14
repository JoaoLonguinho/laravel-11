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

    $post = Post::find(1);

    dd($post);
    return view('welcome');


});
Route::get('admin/usuarios', [UserController::class, "index"]); // Parametros : nome da controller e nome do metodo, que chama a listagem de usuários (pode ser qualquer nome)
Route::get('admin/usuarios/{user}', [UserController::class, "show"]); 