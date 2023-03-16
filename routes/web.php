<?php

use App\Http\Controllers\CadastraUsuarioController;
use App\Http\Controllers\EditaUsuarioController;
use App\Http\Controllers\ExcluiUsuarioController;
use App\Http\Controllers\GerenciarUsuarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UpdateUsuarioController;
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

//CRIAR PÁGINA INICIAL
Route::get('/', [IndexController::class, 'index'])->name('index');

//CADASTRAR USUÁRIO
Route::post('/cadastrar', [CadastraUsuarioController::class, 'cadastrar'])->name('cadastrar');

//CADASTRAR USUÁRIO
Route::post('/update', [UpdateUsuarioController::class, 'editar'])->name('editar');

//EDITAR USUÁRIO
Route::get('/usuario/{id}', [EditaUsuarioController::class, 'index'])->name('usuario');

//EXCLUIR USUÁRIO
Route::get('/excluir/{id}', [ExcluiUsuarioController::class, 'index'])->name('excluir');

//GERENCIAR USUÁRIOS
Route::get('/gerenciar', [GerenciarUsuarioController::class, 'gerenciar'])->name('gerenciar');

