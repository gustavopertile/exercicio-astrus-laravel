<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/produtos', [EventController::class, 'produtos']);
Route::get('/dashboard', [EventController::class, 'dashboard']);
Route::get('produtos/cadastrar', [EventController::class, 'cadastrarProduto']);
Route::get('/produtos/{idProduto}', [EventController::class, 'show']);
Route::get('/categorias', [EventController::class, 'categorias']);
Route::get('/categorias/cadastrar', [EventController::class, 'addCategoriaPag']);

Route::post('/produtos', [EventController::class, 'store']);
Route::post('/categorias/cadastrar', [EventController::class, 'adicionarCategoria']);

Route::get('/produtos/edit/{idProduto}', [EventController::class, 'edit']);
Route::put('/produtos/update/{idProduto}', [EventController::class, 'update']);

Route::delete('/produtos/{idProduto}', [EventController::class, 'destroy']);
Route::delete('/categorias/{idCategoria}', [EventController::class, 'destroyCategoria']);
