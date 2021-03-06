<?php

use App\Http\Controllers\RequisicaoController;
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
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/adicionarquantia', [App\Http\Controllers\RequisicaoController::class, 'adicionarQuantia']);

Route::get('/exibirtudo', [RequisicaoController::class, 'exibirTudo']);

Route::post('/adicionargasto', [RequisicaoController::class, 'adicionarGasto']);

Route::post('/removeritem', [RequisicaoController::class, 'removerItem']);
