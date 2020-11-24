<?php

use App\Http\Controllers\CategoriasContreoller;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\EvaluacionesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\UsuariosContreoller;
use App\Models\subcategorias;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::resource('/evaluaciones', EvaluacionesController::class)->middleware('auth');

Route::resource('/usuarios/nuevousuario', HomeController::class)->middleware('auth');
Route::resource('/usuarios', UsuariosContreoller::class)->middleware('auth');

Route::get('categorias/nuevacategoria', function(){
return view('categoriasinput');
})->middleware('auth');
Route::resource('/categorias', CategoriasContreoller::class)->middleware('auth');
Route::get('/preguntas/nuevapregunta',function(){
    return view('preguntasinput',['subcategorias'=>subcategorias::get(),'tipo_preguntas'=>DB::table('tipo_pregunta')->get()]);
})->middleware('auth');
Route::resource('/preguntas',PreguntasController::class)->middleware('auth');
Route::resource('/evaluacion',EvaluacionController::class);
Route::resource('prueba',PruebaController::class);

Auth::routes();
