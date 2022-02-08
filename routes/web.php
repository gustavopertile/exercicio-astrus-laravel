<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/produtos', [EventController::class, 'produtos']);
Route::get('/cadastrar-produto', [EventController::class, 'cadastrarProduto'])->middleware('auth');
Route::get('/produtos/{idProduto}', [EventController::class, 'show']);
Route::post('/produtos', [EventController::class, 'store']);
Route::get('/produtos/edit/{idProduto}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/produtos/update/{idProduto}', [EventController::class, 'update']);
Route::delete('/produtos/{idProduto}', [EventController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');


Route::get('/categorias', [EventController::class, 'categorias']);

Route::get('/categorias/cadastrar', [EventController::class, 'addCategoriaPag'])->middleware('auth');
Route::post('/categorias/cadastrar', [EventController::class, 'adicionarCategoria']);
Route::get('/categorias/edit/{idCategoria}', [EventController::class, 'editCategoria'])->middleware('auth');
Route::put('/categorias/update/{idCategoria}', [EventController::class, 'updateCategoria']);
Route::delete('/categorias/{idCategoria}', [EventController::class, 'destroyCategoria'])->middleware('auth');
