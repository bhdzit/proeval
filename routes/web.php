<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\EvaluacionesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\SubcategoriasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Responses\LoginResponse;


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
Route::post('login', [LoginController::class, 'login']);
Route::get('/',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::resource('/usuarios',UsuariosController::class)->middleware('auth');
Route::resource('/evaluaciones',EvaluacionesController::class)->middleware('auth');
Route::resource('/categorias',CategoriasController::class)->middleware('auth');
Route::resource('/subcategorias',SubcategoriasController::class)->middleware('auth');
Route::resource('/preguntas',PreguntasController::class)->middleware('auth');
