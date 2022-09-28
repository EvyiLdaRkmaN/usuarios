<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MarryController;
use Illuminate\Database\Schema\IndexDefinition;

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

Route::get('/', HomeController::class);
Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::get('usuarios/marry',[UsuarioController::class, 'marry'])->name('usuarios.marry');
Route::post('usuarios/marry',[UsuarioController::class, 'marryCreate'])->name('usuarios.marry.create');
Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('usuarios/{usuario}',[UsuarioController::class, 'destroy'])->name('usuarios.destroy');
Route::get('marry',[MarryController::class, 'index'])->name('marry.index');