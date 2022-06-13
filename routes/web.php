<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PostsController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios.index');

Route::post('/usuarios',[UsuariosController::class,'store'])->name('usuarios.store');

Route::get('/posts',[PostsController::class,'index'])->name('posts.index');
Route::post('/posts',[PostsController::class,'store'])->name('posts.store');