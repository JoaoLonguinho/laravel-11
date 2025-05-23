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

    return view('welcome');

});
Route::get('admin/usuarios', [UserController::class, "index"])->name('users.index');; // Parametros : nome da controller e nome do metodo, que chama a listagem de usuários (pode ser qualquer nome)
Route::get(
    'admin/usuarios/cadastrar', 
    [UserController::class, "create"]
)->name('users.create');
Route::post(
    'admin/usuarios/cadastrar', 
    [UserController::class, "store"]
)->name('users.store'); #adicionando nome a rota
Route::get('admin/usuarios/{user}', [UserController::class, "show"]); 