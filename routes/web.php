<?php

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

Route::get('admin/usuarios', function(){
    // json
    return [
        'id' => 1,
        'name' => "João"
    ];
});