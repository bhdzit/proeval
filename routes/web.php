<?php

use App\Http\Controllers\CategoriasContreoller;
use App\Http\Controllers\EvaluacionesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosContreoller;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/evaluaciones', EvaluacionesController::class);
Route::resource('/usuarios/nuevousuario', HomeController::class);
Route::resource('/usuarios', UsuariosContreoller::class);
Route::get('categorias/nuevacategoria', function(){
return view('categoriasinput');
});
Route::resource('/categorias', CategoriasContreoller::class);
Auth::routes();
